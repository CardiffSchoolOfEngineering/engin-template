<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$app			= JFactory::getApplication();
$doc			= JFactory::getDocument();
$templateparams	= $app->getTemplate(true)->params;
define('_BF_VARIANT', $templateparams->get('variant') );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
     <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]-->
	<?php $this->setMetaData('generator','Cardiff University School of Engineering in association with Blue Flame IT Ltd.'); ?>
	<jdoc:include type="head" />

	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	
    <?php $link = '<link rel="stylesheet" href="%s/templates/%s/css/%stemplate.css" type="text/css" />';
       echo sprintf($link, 
       $this->baseurl,
       $this->template,
       $templateparams->get('variant')); ?>
	<!--[if lte IE 7]>
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ieonly.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<?php if($this->direction == 'rtl') : ?>
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template_rtl.css" rel="stylesheet" type="text/css" />
	<?php endif; ?>
	<link rel="stylesheet" href="/templates/cardiffgeneric/css/leftmenu.css" type="text/css" />
</head>
<?php
$menu =& JSite::getMenu();
$active = $menu->getActive();
$params = $menu->getParams( $active->id );
$class = $params->get( 'pageclass_sfx' );
?>
  <body<?php if ($class) echo ' class="' . $class . '"'; ?>>
<div id="main">
<a id="page-top" name="page-top"></a>
<div id="page">

	<div id="top">
	<?php if($this->countModules('top')) { ?><jdoc:include type="modules" name="top" style="xhtml" /><?php } ?>
		<ul>
			<li><strong>EXPLORE CARDIFF UNIVERSITY</strong></li>
			<li><a href="http://www.cardiff.ac.uk/index.html">HOME</a></li>
			<li><a href="http://www.cardiff.ac.uk/about/index.html">ABOUT</a></li>
			<li><a href="http://www.cardiff.ac.uk/education/index.html">EDUCATION</a></li>
			<li><a href="http://www.cardiff.ac.uk/research/index.html">RESEARCH</a></li>
			<li><a href="http://www.cardiff.ac.uk/news/index.html">NEWS</a></li>
			<li><a href="http://www.cardiff.ac.uk/events/index.html">EVENTS</a></li>
			<li><a href="http://www.cardiff.ac.uk/az/index.html">A-Z</a></li>
		</ul>
	</div><!-- Close #top div -->

<div id="header">
	<span class="logo">
    	<a href="http://www.cardiff.ac.uk/index.html" title=""><img src="templates/<?php echo $this->template ?>/images/image-37306-full.gif" alt="Cardiff University | Prifysgol Caerdydd" title="Cardiff University | Prifysgol Caerdydd" /></a>
    </span>
	
    <?php if($templateparams->get('variant') == 'researchgroup') { ?>
    <div id="teelogo">
		<jdoc:include type="modules" name="user1" style="xhtml" />
	</div>
    <?php } ?>
	<div class="floatLeftTop">
		<?php if($templateparams->get('variant') == 'researchgroup') { ?>
        <div class="moduletable"><div class="custom">
        <p class="externallink"><a href="http://www.cardiff.ac.uk/engin/index.html" title="Cardiff School of Engineering">Cardiff School of Engineering</a></p>
		<p class="externallink"><a href="http://www.cardiff.ac.uk/engin/research/index.html" title="School Research">School Research</a></p>
        </div></div>
		<?php } ?>
		<div class="centre-name">
        <?php if($templateparams->get('variant') == 'school') { ?><h2>Welcome to the</h2><?php } ?>
            <a href="<?php echo JURI::Base(); ?>" title="<?php echo $app->getCfg('sitename'); ?>">Cardiff School of Engineering</a>
        </div>
	</div>
    <?php if($templateparams->get('variant') == 'school') { ?>
    <div id="schoolimage">
		<jdoc:include type="modules" name="user1" style="" />
	</div>
    <?php } ?>
</div><!-- Close #header div -->
<?php if($templateparams->get('variant') == 'school') { ?>
		<div id="topmenu">
			<jdoc:include type="modules" name="user3" style="" />
		</div>
	<?php } ?>
<div style="clear:both;"></div>
	<?php if($this->countModules('left')) { ?>
	<div id="left">
		<jdoc:include type="modules" name="left" style="xhtml" />
	</div><!-- Close #left div -->
	<?php } ?>
    
	<!-- Main content space -->
	<div id="body">
		<jdoc:include type="message" />
		<jdoc:include type="component" />
	</div><!-- Close #body div -->

	<?php if($this->countModules('right')) { ?>
    <div id="right">
		<jdoc:include type="modules" name="right" style="xhtml" />
	</div>
	<?php } ?>
<div class="top_return"><a href="#page-top" class="backToTop">Back to top</a></div>
<div style="clear:both;"></div>

</div><!-- Close #page div -->
<div style="clear:both;"></div>

<div id="footer">
<ul>
<li><a href="http://www.cardiff.ac.uk/legals/copyright/index.html">© Cardiff University 2007</a></li>
<li><a href="http://www.cardiff.ac.uk/accessibility/index.html">Accessibility</a></li>
<li><a href="http://www.cardiff.ac.uk/help/index.html">Help</a></li>
<li><a href="http://www.cardiff.ac.uk/contactus/webfeedback/index.html">Feedback</a></li>
<li><a href="http://www.cardiff.ac.uk/legals/privacy/index.html">Privacy Policy</a></li>
<li><a href="http://www.cardiff.ac.uk/legals/termsofuse/index.html">Terms of Use</a></li>
<li><a href="http://www.cardiff.ac.uk/az/index.html">A-Z</a></li>
</ul>
</div>

<jdoc:include type="modules" name="debug" />
</div>
</body>
</html>