<?php

namespace Tests\Feature;

use App\Notifications\ShareDealNotification;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class ShareDealTest extends TestCase
{
    public function test_share_deal_submit()
    {
        Notification::fake();

        $this->followingRedirects()
            ->post('/part-two/submit', [
                'sender_name' => 'John',
                'recipient_name' => 'Jane',
                'recipient_email' => 'jane@example.com',
            ])
            ->assertOk();

        Notification::assertSentTo(
            new AnonymousNotifiable,
            ShareDealNotification::class,
            function ($notification, $channels, $notifiable) {
                return $notifiable->routes['mail'] == ['jane@example.com' => 'Jane'];
            }
        );

        $this->assertDatabaseHas('deal_share', [
            'sender_name' => 'John',
            'recipient_name' => 'Jane',
            'recipient_email' => 'jane@example.com',
        ]);
    }
}
