<?php

namespace App\Notifications;


use App\Models\Building;
use App\User;
use function foo\func;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewBuilding extends Notification
{
    use Queueable;
    public $user,$building;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user,Building $building)
    {
        //
        $this->user = $user;
        $this->building = $building;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];
    }

    public function toSlack($notifiable){
        return (new SlackMessage)
            ->success()
            ->content('New Building Just Added By '. $this->user->name)
            ->attachment(function($attachment){
                    $attachment->title('New Building' , url('http://localhost:8000/buildings'))
                        ->fields([
                            'Building name'=> $this->building->name,
                            'By' => $this->user->name
                        ]);
            });
    }


//    /**
//     * Get the mail representation of the notification.
//     *
//     * @param  mixed  $notifiable
//     * @return \Illuminate\Notifications\Messages\MailMessage
//     */
////    public function toMail($notifiable)
////    {
////        return (new MailMessage)
////                    ->line('The introduction to the notification.')
////                    ->action('Notification Action', url('/'))
////                    ->line('Thank you for using our application!');
////    }
//
//    /**
//     * Get the array representation of the notification.
//     *
//     * @param  mixed  $notifiable
//     * @return array
//     */
//    public function toArray($notifiable)
//    {
//        return [
//            //
//         ];
//    }
}
