<?php
/**
 * @package    M.S. Contact Me Buttons
 *
 * @author     Koen Vandezande <koen@rioguides.biz>
 * @copyright  RioGuides.Biz
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://rioguides.biz
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

// Access to module parameters
$domain = $params->get('domain', 'https://rioguides.biz');
// Load the smart search component language file.
$lang = $app->getLanguage();
$lang->load('mod_mscontactbtns', JPATH_SITE);
?>
<div class="contact_buttons">
  <div class="contact_button-item">
    <span class="contact_button social_icon_es"><i class="far fa-envelope"></i><?php echo Text::_('MOD_MSCONTACTBTNS_CORREO_ELEC'); ?></span>
  </div>
  <div class="contact_button-item">
    <a class="contact_button-anchor" href="https://api.whatsapp.com/send?phone=5491157548291" target="_blank" rel="noopener noreferrer">
      <span class="contact_button"><i class="fab fa-whatsapp"></i><?php echo Text::_('MOD_MSCONTACTBTNS_WHATSAPP'); ?></span>
    </a>
  </div>
</div>
