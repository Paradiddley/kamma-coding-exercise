<?php

namespace Tests\Unit;

use App\Actions\SubmitShareDealForm;
use App\Models\DealShare;
use App\Notifications\ShareDealNotification;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Notification;
use Mockery as M;
use Tests\TestCase;

class SubmitShareDealFormTest extends TestCase
{
    public function test_action()
    {
        Notification::fake();

        $attributes = [
            'recipient_name' => 'name',
            'recipient_email' => 'email@example.com'
        ];

        $mDealShare = M::mock(DealShare::class);
        $mDealShare->shouldReceive('fill')
            ->with($attributes)
            ->once();
        $mDealShare->shouldReceive('save')
            ->withNoArgs()
            ->once();

        App::shouldReceive('make')
            ->with(DealShare::class)
            ->andReturn($mDealShare);

        $action = new SubmitShareDealForm;
        $action->handle($attributes);

        Notification::assertSentOnDemand(ShareDealNotification::class);
    }
}
