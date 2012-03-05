<?php include_once('config.php'); ?>

<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget
(
    {
        version:    2,
        type:       'profile',
        rpp:        4,
        interval:   30000,
        width:      250,
        height:     330,
        theme:
        {
            shell:
            {
                background: 'transparent',
                color:      '#ffffff'
            },
            tweets:
            {
                background: 'transparent',
                color:      '#fff',
                links:      '#fe0'
            }
        },
        features:
        {
            scrollbar:      false,
            loop:           false,
            live:           true,
            behavior:       'all'
        }
    }
)
.render()
.setUser('<?php print $cf_tweet_user; ?>')
.start();
</script>

