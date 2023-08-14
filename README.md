# Event-Manager
 api built with Laravel to handle events
## routes
list all events
create new events
update existing event
delete existing event
for create you must be authenticated
for update and delete must be authorized(owner of event)
----
list all attendees to an event
create an attendee to event(must be authenticated)
delete an attendee(must be attendee and authorized)
---
special attributes for events route
include user will list event with owner user info.
include attendees will list an event. with all attendees
include attendees.user will list event with attendees and their users.
------
special attributes for attendees
include user will list all attendees for an event 

## implemented :
- relational db
-populating db with faker and seeders
-authentication with sanctum
-authorization with policies
-sending email notifications one day prior start of an event
-schedules and queues
-saving queue to db(log)
-rate limiting (api throttling)

