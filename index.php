<?php include_once('config.php'); ?>

<html>

<head>

<title><?php print $cf_your_name; ?></title>

<link href='http://fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Alice' rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="slidedeck/slidedeck.skin.css" type="text/css" media="screen" />

<link rel='stylesheet' href='main.css' type='text/css' media='screen' />

<?php if( file_exists('custom.css') ) : ?>
    <link rel='stylesheet' href='custom.css' type='text/css' media='screen' />
<?php endif; ?>

<style type='text/css'>
<?php
// TODO: this code probably belongs in config.pgp
if( $cf_background_img == 'random' )
{
    $bgs                = glob('bg/*');
    $randidx            = array_rand($bgs);
    $cf_background_img  = $bgs[$randidx];
}
?>
BODY
{
    background: url('<?php print $cf_background_img; ?>') 0 0 repeat;
}
</style>

</head>

<body>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"
        type="text/javascript"></script>
    <script type="text/javascript" src="slidedeck/slidedeck.jquery.lite.js"></script>

    <div id='portfolio' class="skin-slidedeck trans60">

        <div id='name' class='heading'>
            My Stuff
            <a href='http://www.youtube.com/watch?v=MvgN5gCuLac'><sup>*</sup></a>...
        </div>

        <dl class="slidedeck">

            <?php
                foreach( @scandir("sections") as $section )
                {
                    if( preg_match("/^\./", $section) )
                        continue;
                    include_once("sections/$section");
                }
            ?>

        </dl>
        
        <script type="text/javascript">
            // The most basic implementation using the default options
            $(document).ready(
                    function() { $('.slidedeck').slidedeck(); }
            );
        </script>

    </div>

    <div id='biobox'>

        <div id='name' class='heading'><?php print $cf_your_name; ?></div>

        <?php if( isset($cf_old_tagline) ) : ?>
            <strike style='color: #999;'><small><?php print $cf_old_tagline; ?></small></strike><br />
        <?php endif; ?>

        <?php print $cf_tagline; ?>

        <div id='social'>
            <a href='<?php print $cf_blog_url; ?>'><img align='left' src='badges/rss.png' alt='Blog' /></a>
            <a href='https://github.com/<?php print $cf_github_name; ?>'><img align='left' src='badges/github.png' alt='GitHub' /></a>
            <a href='http://forr.st/-<?php print $cf_forrst_name; ?>'><img align='left' src='badges/forrst.png' alt='Forrst' /></a>
            <a href='http://ravi.be/'><img align='left' src='badges/tumblr.png' alt='Tumblr' /></a>
            <a href='http://twitter.com/<?php print $cf_twitter_name; ?>'><img align='left' src='badges/twitter.png' alt='Twitter' /></a>
            <a href='http://facebook.com/<?php print $cf_facebook_name; ?>'><img align='left' src='badges/facebook.png' alt='Facebook' /></a>
            <a href='http://flickr.com/photos/<?php print $cf_flickr_name; ?>'><img align='left' src='badges/flickr.png' alt='Flickr' /></a>
            <a href='http://last.fm/user/<?php print $cf_lastfm_name; ?>'><img align='left' src='badges/last-fm.png' alt='Last FM' /></a>
            <div style='clear: both; padding-top: 10px;'>
                <?php if( isset($cf_small_print) ) : ?>
                    <small><?php print $cf_small_print; ?></small>
                <?php endif; ?>
            </div>
        </div>

    </div>

    <?php if( isset($cf_tweet_user) ) : ?>
        <div id='tweetbox'>
            <?php include_once('tweetbox.php'); ?>
        </div>
    <?php endif; ?>

    <?php
        if( file_exists('footer.html') )
            include_once('footer.html');
    ?>

    <div id='credits'>
        Personal site template <a href='http://code.ahren.org/rodomontade'>Rodomontade</a> from
        <a href='http://code.ahren.org/'>Ahren Code</a>
<small>

</body>

</html>
