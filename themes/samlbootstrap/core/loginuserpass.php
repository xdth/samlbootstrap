<?php
$this->data['header'] = $this->t('{login:user_pass_header}');

if (strlen($this->data['username']) > 0) {
	$this->data['autofocus'] = 'password';
} else {
	$this->data['autofocus'] = 'username';
}
$this->includeAtTemplateBase('includes/header.php');

?>

<?php
if ($this->data['errorcode'] !== NULL) {
?>
	<div style="border-left: 1px solid #e8e8e8; border-bottom: 1px solid #e8e8e8; background: #f5f5f5">
		<img src="/<?php echo $this->data['baseurlpath']; ?>resources/icons/experience/gtk-dialog-error.48x48.png" class="float-l erroricon" style="margin: 15px" alt="" />
		<h2><?php echo $this->t('{login:error_header}'); ?></h2>
		<p><b><?php echo htmlspecialchars($this->t('{errors:title_' . $this->data['errorcode'] . '}', $this->data['errorparams'])); ?></b></p>
		<p><?php echo htmlspecialchars($this->t('{errors:descr_' . $this->data['errorcode'] . '}', $this->data['errorparams'])); ?></p>
	</div>
<?php
}
?>
 <div class="row">
  <div class="col-sm-4"> </div>
  <div class="col-sm-4">

	<h3>Sign in</h3>
	<br/>
	<form action="?" method="post" name="f" role="form">
		<div class="form-group">
			<label for="email"><?php echo $this->t('{login:username}'); ?></label>
			<?php echo '<input type="text" class="form-control" id="username" tabindex="1" name="username" value="' . htmlspecialchars($this->data['username']) . '" />'; ?>
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input id="password" class="form-control" type="password" tabindex="2" name="password" />
		</div>
		<div class="checkbox">
			<label><input type="checkbox"> Remember me</label>
		</div>
		<div class="right">
			<input onclick="this.value='<?php echo $this->t('{login:processing}'); ?>';this.disabled=true;this.form.submit();return true;" type="submit" class="btn btn-default" tabindex="5" id="mobilesubmit" value="<?php echo $this->t('{login:login_button}'); ?>" />
		</div>	
		<?php
			foreach ($this->data['stateparams'] as $name => $value) {
				echo('<input type="hidden" name="' . htmlspecialchars($name) . '" value="' . htmlspecialchars($value) . '" />');
			}
		?>
	</form>

  </div>
  <div class="col-sm-4">

  </div>
</div>

<?php
$this->includeAtTemplateBase('includes/footer.php');