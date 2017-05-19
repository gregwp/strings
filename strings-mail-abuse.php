$message1 = "Hi there,
\n\n
We regret to inform you that the Akismet API key registered to $email has been suspended due to abuse. This subscription was being used on $sites sites, and averaged $avg API calls per month. To date, Akismet has seen $calls comment checks from $siteText.";


/* REASON CODES FOR SUSPENSIONS */

/* NEEDS PLUS PLAN =============1 */
if ($reason === '1')
    $explain = "While Akismet is free for personal use, there are premium plans available for commercial sites, agencies, businesses, hosts, and large publishing networks. Our Plus plan ($5/month/site or $59/year/site) covers one site which makes it ideal for your current usage. If you would like to simply go ahead and upgrade your subscription, you can do so by logging in to your Akismet account via http://akismet.com/ and selecting the “change plans” option.";
    
/* NEEDS ENTERPISE PLAN =============2 */
if ($reason === '2')
    $explain = "While Akismet is free for personal use, there are premium plans available for commercial sites, agencies, businesses, hosts, and large publishing networks. Judging by your usage, it appears that an upgraded plan would better suited for your site.
\n\n
Our Enterprise subscription ($50/month or $550/year) covers an unlimited number of sites and includes 80,000 monthly API calls, which makes it ideal for your current usage. If you would like to simply go ahead and upgrade your subscription, you can do so by logging in to your Akismet account via http://akismet.com/ and selecting the “change plans” option.";

/* NEEDS CUSTOM PLAN =============3 */
if ($reason === '3')
    $explain = "While Akismet is free for personal use, there are premium plans available for commercial sites, agencies, businesses, hosts, and large publishing networks. Judging by your usage, it appears that a custom plan would be better suited to cover your sites. You can reply to this message for more details about that.";
