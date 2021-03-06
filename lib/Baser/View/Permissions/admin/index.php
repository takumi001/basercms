<?php
/**
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright (c) baserCMS Users Community <http://basercms.net/community/>
 *
 * @copyright		Copyright (c) baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Baser.View
 * @since			baserCMS v 0.1.0
 * @license			http://basercms.net/license/index.html
 */

/**
 * [ADMIN] アクセス制限設定一覧
 */
$this->BcBaser->js('admin/libs/sorttable', false);
$this->BcBaser->js([
	'admin/libs/jquery.baser_ajax_data_list',
	'admin/libs/jquery.baser_ajax_batch',
	'admin/libs/jquery.baser_ajax_sort_table',
	'admin/libs/baser_ajax_data_list_config',
	'admin/libs/baser_ajax_batch_config'
]);
?>


<script type="text/javascript">
$(function(){
	$("#PermissionsSearchBody").show();
	$.baserAjaxDataList.init();
	$.baserAjaxSortTable.init({ url: $("#AjaxSorttableUrl").html()});
	$.baserAjaxBatch.init({ url: $("#AjaxBatchUrl").html()});
});
</script>


<div id="AjaxBatchUrl" style="display:none"><?php $this->BcBaser->url(['controller' => 'permissions', 'action' => 'ajax_batch']) ?></div>
<div id="AjaxSorttableUrl" style="display:none"><?php $this->BcBaser->url(['controller' => 'permissions', 'action' => 'ajax_update_sort', $this->request->params['pass'][0]]) ?></div>
<div id="AlertMessage" class="message" style="display:none"></div>
<div id="MessageBox" style="display:none"><div id="flashMessage" class="notice-message"></div></div>
<div id="DataList"><?php $this->BcBaser->element('permissions/index_list') ?></div>