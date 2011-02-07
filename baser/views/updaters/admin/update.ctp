<h2>
	<?php $baser->contentsTitle() ?>
</h2>
<div class="corner10" style="background-color:#f2f2f2;padding:15px 5px;">
	<p> <strong><?php echo $updateTarget ?> のバージョン</strong>：<?php echo $baserVer ?><br />
		<strong>対応するアプリケーションのバージョン</strong>：<?php echo $siteVer ?>
	</p>
	<?php if($baserVer != $siteVer || $scriptNum): ?>
	<p>「アップデート実行」をクリックしてアプリケーションのアップデートを完了させてください。</p>
		<?php if($scriptNum): ?>
	<p>アップデートプログラムが <strong><?php echo $scriptNum ?> 個</strong> あります。</p>
		<?php endif ?>
		<?php echo $form->create(array('action'=>$this->action, 'url'=>array($plugin))) ?>
		<?php echo $form->hidden('Installation.update',array('value'=>true)) ?>
		<?php echo $form->end(array('label'=>'アップデート実行','class'=>'button btn-red')) ?>
	<?php else: ?>
	<p>WEBサイトのバージョンは最新です。</p>
	<p>
		<?php if(!$plugin): ?>
			<?php $baser->link('≫ 管理画面に移動する','/admin/users/login') ?>
		<?php else: ?>
			<?php $baser->link('≫ プラグイン一覧に移動する','/admin/plugins/index') ?>
		<?php endif ?>
	</p>
	<?php endif ?>
</div>
<?php if($scriptNum): ?>
<div class="corner10" style="background-color:#f2f2f2;padding:15px 5px;margin-top:20px">
	<p>	<strong>データベースのバックアップは行いましたか？</strong><br />
		<?php if(!$plugin): ?>
		バックアップを行われていない場合は、アップデートを実行する前に、プログラムファイルを前のバージョンに戻しシステム設定よりデータベースのバックアップを行いましょう。<br />
		<?php else: ?>
		バックアップを行われていない場合は、アップデートを実行する前にデータベースのバックアップを行いましょう。<br />
		<?php endif ?>
		<small>※ アップデート処理は自己責任で行ってください。</small><br />
		<?php if($plugin): ?>
		<?php $baser->link('≫ バックアップはこちらから','/admin/tools/maintenance/backup') ?>
		<?php endif ?>
	</p>
	<p><strong>リリースノートのアップデート時の注意事項は読まれましたか？</strong><br />
		リリースバージョンによっては、追加作業が必要となる場合があるので注意が必要です。<br />公式サイトのリリースノート必ず確認してください。</p>
</div>
<?php endif ?>