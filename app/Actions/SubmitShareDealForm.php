<?php

namespace App\Actions;

use App\Models\DealShare;
use App\Notifications\ShareDealNotification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Redirect;
use Lorisleiva\Actions\ActionRequest;
use Lorisleiva\Actions\Concerns\AsAction;

class SubmitShareDealForm
{
    use AsAction;

    /**
     * @param array $attributes
     * @return void
     */
    public function handle(array $attributes): void
    {
        DB::transaction(function () use ($attributes) {
            $sharedDeal = App::make(DealShare::class);
            $sharedDeal->fill($attributes);
            $sharedDeal->save();

            Notification::route('mail', [$attributes['recipient_email'] => $attributes['recipient_name']])
                ->notify(new ShareDealNotification($sharedDeal));
        });
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'sender_name' => ['required', 'string', 'max:255'],
            'recipient_name' => ['required', 'string', 'max:255'],
            'recipient_email' => ['required', 'email'],
        ];
    }

    /**
     * @return array
     */
    public function getValidationAttributes(): array
    {
        return [
            'sender_name' => 'your name',
            'recipient_name' => 'friend\'s name',
            'recipient_email' => 'friend\'s email',
        ];
    }

    /**
     * @param ActionRequest $request
     * @return RedirectResponse
     */
    public function asController(ActionRequest $request): RedirectResponse
    {
        $this->handle($request->validated());

        return Redirect::back()->with('message', 'Notification sent');
    }
}
