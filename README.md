# back-to-the-future

## Instructions

> Doc is working on his new portable time machine.
He does not have much time to take care of anything else and therefore calls on your brilliant mind to help him in his calculations, and avoid breaking the space-time continuum!

* Create a `TimeTravel` class that will perform multiple calculations.
This class will have two properties, `$start` and `$end`, which will be two `DateTime` objects for the start date and arrival date of the time travel!

* A first `getTravelInfo()` method will simply be used to give information about the path.
It will have to return the string of characters:
*"There are? Years,? Months,? Days,? Hours,? Minutes and? Seconds between the two dates"* by replacing of course the question marks by the values correct.

> Following a failed experiment with his new machine on December 31, 1985, Doc found itself projected in time.
According to the notes he left, Marty deduces that it was projected 1 billion seconds in the past.
Marty must set the DeLorean at the right date to find him.

* Add the `findDate(DateInterval $interval)` method that will help find the date in question (so 1 billion seconds before the `$start` property).

> You accompanied Marty back in time and found Doc bad.
He is not of any help to you.
It must be brought back as soon as possible to your time to treat it.
But the tank of the Dolorean is damaged.
After a quick survey, you estimate that the car can not make leaps in time than, at best, 1 month plus 1 week and 1 day.
At each stop, it will be necessary to refuel.

* Write a last method `backToFutureStepByStep(DatePeriod $step)` which will return an array containing all the dates they will have to stop, in order to better adjust the temporal convector.
The returned dates should be formatted according to the needs of the temporal convector, ie in the form `Jan 22 1984 AM 06:35`.

## Installation

Clone the repository and move in :
```
$ git clone https://github.com/JuAlexandre/back-to-the-future.git
$ cd back-to-the-future
```

Launch the PHP server :
```
php -S localhost:8000
```
