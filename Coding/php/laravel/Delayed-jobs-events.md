# Delayed-jobs-events.md

*  https://link.medium.com/YT3AV4kJddb

## Jobs can be Scheduled to run on a certain time 
One of key differences between the Jobs, Listeners and Notifications, is that Jobs can be Scheduled, where Listeners and Notifications can not. They can be delayed, meaning, the Listener or Notification will be pushed to the queue but it will be processed later.
* https://laravel.com/docs/5.8/queues 

## Listeners are executed once the Event broadcasts (pub/sub) 

The handle() method of the Listeners receives automatically the Event it listens for, and this is automatically injected by the framework when the Event fires.

If you try to Schedule an Event, it will fail miserably since it won’t receive the Event.

## An example of chaining them 

The Job fired an Event, that Event was picked up by two Listeners, and one of them used Notifications. 
