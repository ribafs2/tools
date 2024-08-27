@ok
<?php

  function test ($x, $y) {
    $r = strtotime ($x, $y);
    echo "$x : ".$r."(".date('D, d M Y H:i:s', $r).")\n";
  }

  $timezones = ['Etc/GMT-3', 'Europe/Moscow'];
  foreach ($timezones as $tz) {
      date_default_timezone_set ($tz);
      $times = array (1234567890, 123456789, 1356996141, 1356996241);
      foreach ($times as $t) {
        test (date ('Ymd', $t), time());
        test ('16:00 22.08.2009', $t);
        test ('+5 days next Monday', $t);
        test ('01.01.2011', $t);
        test ('01.01.2013', $t);
        test ('01.02.2013', $t);
        test ('01.05.2012', $t);
        test ('01.06.2012', $t);
        test ('01.07.2012', $t);
        test ('01.08.2012', $t);
        test ('01.10.2011', $t);
        test ('01.12.2011', $t);
        test ('04.03.2012', $t);
        test ('05.02.2013', $t);
        test ('05.04.2012', $t);
        test ('05.06.2012', $t);
        test ('05.10.2012', $t);
        test ('06.04.2012', $t);
        test ('06.07.2012', $t);
        test ('08.01.2013', $t);
        test ('08.08.2012', $t);
        test ('10.01.2013', $t);
        test ("10 June 2010", $t);
        test ('10 June 2011', $t);
        test ('10 November 2010', $t);
        test ('11.07.2012', $t);
        test ('11 July 2011', $t);
        test ('11 September 2012', $t);
        test ("12:00 -5days", $t);
        test ('12.05.2012', $t);
        test ("-12 days", $t);
        test ('12 December 2011', $t);
        test ('12 July 2011', $t);
        test ('13.03.2012', $t);
        test ('13.10.2012', $t);
        test ("-13 days", $t);
        test ("13 January 2011", $t);
        test ("13 March 2010 9:00:00", $t);
        test ('14.01.2013', $t);
        test ('14.03.2012', $t);
        test ("14 April 2010", $t);
        test ('-14 days', $t);
        test ("14 March 2010", $t);
        test ("14 March 2010 9:00:00", $t);
        test ('14 November 2011', $t);
        test ("14 October 2010", $t);
        test ('+14 years', $t);
        test ("15.03.2010 01:00:02", $t);
        test ("+15 days", $t);
        test ("15 March 2010", $t);
        test ('18.09.2012', $t);
        test ('-180 days', $t);
        test ('19 October 2010', $t);
        test ('1 April 2012', $t);
        test ("-1 day 0:00", $t);
        test ("-1 day 00:00", $t);
        test ("+1 hour", $t);
        test ('1 January 2007', $t);
        test ('1 January 2008', $t);
        test ('1 January 2012', $t);
        test ('1 June 2008', $t);
        test ('1 June 2012', $t);
        test ('1 May 2012', $t);
        test ("1 September 2009", $t);
        test ('-1 week', $t);
        test ("-1 week", $t);
        test ('-1 week 00:00', $t);
        test ('-1 year', $t);
        test ('-1 year', $t);
        test ("+1 year", $t);
        test ('2008-11-01', $t);
        test ("2008-11-01", $t);
        test ('2012-01-01 00:00', $t);
        test ('2012-05-01 00:00', $t);
        test ("2012-12-14 11:58:07", $t);
        test ('2.03.2012', $t);
        test ('20 January 2012', $t);
        test ('+20 years', $t);
        test ('21.12.2012', $t);
        test ('21 June 2012', $t);
        test ('21 May 2012', $t);
        test ("21 November 2009", $t);
        test ('21 October 2011', $t);
        test ('22.09.2012', $t);
        test ('22.10.2012', $t);
        test ("22 February 2011", $t);
        test ('23 September 2011', $t);
        test ("-24 hours", $t);
        test ('25 August 2011', $t);
        test ('26.09.2012', $t);
        test ('26 August 2011', $t);
        test ('26 January 2011', $t);
        test ('27.03.2012', $t);
        test ('27.09.2012', $t);
        test ('27 November 2011', $t);
        test ('27 September 2011', $t);
        test ('28.05.2012', $t);
        test ('28 December 2011', $t);
        test ('2 August 2011', $t);
        test ('2 days', $t);
        test ('-2 days', $t);
        test ('+2 days 11:00', $t);
        test ('+2 days 19:00', $t);
        test ("-2 months", $t);
        test ("+2 months", $t);
        test ("2 September 2010", $t);
        test ('+2 week 1 day 00:00', $t);
        test ('+2 week +1 day 00:00', $t);
        test ("-2 weeks", $t);
        test ('-30 days', $t);
        test ('30 January 2010', $t);
        test ("+30 minutes", $t);
        test ('30 September 2011', $t);
        test ('31 January 2010', $t);
        test ('-32 days', $t);
        test ('3 August 2011', $t);
        test ('-3 months', $t);
        test ("-3 months", $t);
        test ('-4 days', $t);
        test ("-4 days", $t);
        test ('+4 hours', $t);
        test ("-4 hours", $t);
        test ('4 March 2011', $t);
        test ("-5 days", $t);
        test ('-5 months', $t);
        test ('-6 days', $t);
        test ('6 December 2010', $t);
        test ("6 December 2010", $t);
        test ("-6 hour", $t);
        test ("+6 hour", $t);
        test ("-6 months", $t);
        test ("+6 months", $t);
        test ('6 November 2008', $t);
        test ('-7 days', $t);
        test ('7 February 2012', $t);
        test ("7 June 2010", $t);
        test ("-80 hours", $t);
        test ("+8 hours", $t);
        test ("-6 day", $t);
        test ("10.08.2012", $t);
        test ("+1 day", $t);
        test ("-4 days", $t);
        test ("next Monday", $t);
        test ("today 18:00", $t);
        test ("today 22:00", $t);
        test ('tomorrow 0:00', $t);
        test ("tomorrow 6:00", $t);
        test ("tomorrow 8:00", $t);
        test ("2012-05-15", $t);
        test ('0:00', $t);
        test ("00:00", $t);
        test ('01.03.2012', $t);
        test ('08.06.2012', $t);
        test ("09.02.2010 00:00", $t);
        test ("10 August 2010", $t);
        test ("10 July 2010", $t);
        test ('15.10.2012', $t);
        test ("16 June 2010", $t);
        test ("17 July 2010", $t);
        test ("17 November 2010", $t);
        test ('18 November 2010', $t);
        test ("-1 days", $t);
        test ('1 December 2011', $t);
        test ('1 February 2012', $t);
        test ('1 January 2006', $t);
        test ("1 January 2020", $t);
        test ("1 January 2038", $t);
        test ("-1 minute", $t);
        test ('2008-01-01', $t);
        test ('21 August 2012', $t);
        test ('21 July 2012', $t);
        test ('23.09.2012', $t);
        test ("23 June 2010", $t);
        test ('24.09.2012', $t);
        test ('25.09.2012', $t);
        test ('-2 days', $t);
        test ("2 January 2038", $t);
        test ('2 March 2012', $t);
        test ('+2 weeks', $t);
        test ('+2 weeks 1 day 00:00', $t);
        test ("4 November", $t);
        test ("-4 weeks", $t);
        test ("5 July 2010", $t);
        test ("-6 days", $t);
        test ("+6 days", $t);
        test ("+7 days", $t);
        test ('7 January 2011', $t);
        test ('8.10.2012', $t);
        test ('8.11.2012', $t);
        test ('9.11.2012', $t);
        test ("midnight", $t);
        test ("next day 22:00", $t);
        test ('now', $t);
        test ('01.10.2012', $t);
        test ('01.12.2012', $t);
        test ('04.06.2012', $t);
        test ('11.06.2012', $t);
        test ('12:00', $t);
        test ('16.01.2013', $t);
        test ('17 June 2011', $t);
        test ("19 July 2010", $t);
        test ("+1 day", $t);
        test ("-1 days", $t);
        test ('-1 month', $t);
        test ("-1 month", $t);
        test ('1 November 2011', $t);
        test ('21.07.2012', $t);
        test ('28 January 2012', $t);
        test ("-3 months", $t);
        test ("next day 18:00", $t);
        test ("today 0:00", $t);
        test ('1.12.2012', $t);
        test ('11 July 2012', $t);
        test ('11 June 2012', $t);
        test ("-1 day", $t);
        test ('+1 week', $t);
        test ('-2 weeks', $t);
        test ("-3 days", $t);
        test ('-6 months', $t);
        test ('-7 days', $t);
        test ("next day", $t);
        test ('today', $t);
        test ("0:00", $t);
        test ('1.10.2012', $t);
        test ('+1 day', $t);
        test ('-1 day 00:00', $t);
        test ('-1 week', $t);
        test ('1.11.2012', $t);
        test ('17 November 2010', $t);
        test ("-7 days", $t);
        test ('01.01.2012', $t);
        test ("-1 week", $t);
        test ('-1 day', $t);
        test ('1 month', $t);
        test ("-1 month", $t);
        test ("+1 day", $t);
        test ("+1 month", $t);
        test ('+1 month', $t);
        test ('00:00', $t);
        test ('00:00', $t);
        test ('-1 day', $t);
        test ('+1 day', $t);
        test ('12:00', $t);
        test ("-1 day", $t);
        test ("-7 days", $t);
        test ("next month", $t);
        test ('1 November 2010 next month', $t);
        test ('1 January 2010 next month', $t);
        test ('1 February 2010 next month', $t);
        test ('28 February 2010 next month', $t);
        test ('31 January 2010 next month', $t);
        test ('1 December 2010 next month', $t);
        test ('31 December 2010 next month', $t);
        test ('1 January 2012', $t);
    //    test ("Monday, December 5, 2005 5:47:06 PM MSK", $t);
    //    test ('+45 years', $t);
        test ('20120902', $t);
        test ('Thu Feb 9 02:34:08 2012', $t);
        test ('Thu Feb 9 02:34:08 2012 +0300', $t);
        test ('Thu Feb 9 02:34:08 2012 -0400', $t);
        test ('Thu Feb 9 02:34:08 2012 +0400', $t);
        test ('Thu Feb 9 11:59:11 2012 +0400', $t);
        test ('Thu Aug 9 02:34:08 2012 +0300', $t);
        test ('Thu Aug 9 02:34:08 2012 -0400', $t);
        test ('Thu Aug 9 02:34:08 2012 +0430', $t);
        test ('Thu Aug 9 11:59:11 2012 +0400', $t);
        test ('Fri, 31 Dec 2010 23:59:59 GMT', $t);
        test ('Thu, 9 Aug 2012 23:59:59 GMT', $t);
    //    test ("1 January 2100", $t);
      }
  }
