<?php defined('_JEXEC') or die;
/**
 * @version		$Id: default_profile.php 21321 2011-05-11 01:05:59Z dextercowley $
 * @package		Joomla.Site
 * @subpackage	com_contact
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

if (JPluginHelper::isEnabled('user', 'profile')) :
    $fields = $this->item->profile->getFieldset('profile'); ?>
    <section class="contact-profile" id="users-profile-custom">
	    <dl>
	    <?php foreach ($fields as $profile) :
		    if ($profile->value) :
			    echo '<dt>'.$profile->label.'</dt>';
			    $profile->text = htmlspecialchars($profile->value, ENT_COMPAT, 'UTF-8');

			    switch ($profile->id) :
				    case "profile_website":
					    $v_http = substr ($profile->profile_value, 0, 4);

					    if ($v_http == "http") :
						    echo '<dd><a href="'.$profile->text.'">'.$profile->text.'</a></dd>';
					    else :
						    echo '<dd><a href="http://'.$profile->text.'">'.$profile->text.'</a></dd>';
					    endif;
					    break;

				    default:
					    echo '<dd>'.$profile->text.'</dd>';
					    break;
			    endswitch;
		    endif;
	    endforeach; ?>
	    </dl>
    </section>
<?php endif;

