<?php

namespace App\Jobs;

use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SendVerificationEmail implements ShouldQueue
{
//     use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

//     public $timeout = 1;
//     public $backoff =5;
//     public $tries =-1;

//     /**
//      * Create a new job instance.
//      */
//     public function __construct()
//     {
//         //
//         // $this->job = $job;
//     }

//     /**
//      * Execute the job.
//      */
//     public function handle(): void
//     {
//         throw new Exception('Failed',50);
//             // $value = $this->job;
//             // $to = $value->to;
//         sleep(5);
//         logger('email sent!');
//     }

//     public function retryUntil()
//     {
//         return now()->addSeconds(30);
//     }

//     public function failed(Throwable $th)
//     {
//         if ($th->getCode() == 999) {
//             $this->release();
//         } else {
//             logger($th->getMessage());
//         }
//     }
}
