weather-notifications
=====================

Weather Notifications in OS X

This is a simple application that you can schedule to send a message to the OS X notifications application to pop up the current weather.

Basically, the app reads in a xml file with the last updated conditions from the [National Weather Service]("http://w1.weather.gov/xml/current_obs/") and then pulls out the current local date/time along with the last updated temperature.  The application builds a text message from this and sends it to an application called [terminal-notifier](http://osxdaily.com/2012/08/03/send-an-alert-to-notification-center-from-the-command-line-in-os-x/) which takes this output and pushes it into the OS X notification center for display.