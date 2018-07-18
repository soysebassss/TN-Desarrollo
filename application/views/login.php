<!-- HOLAAAA-->
<form method="post" action="<?=site_url('Login');?>">
<input type="text" name="usu_correo" placeholder="correo">
<br>
<input type="password" name="usu_clave" placeholder="clave">	
<br>
<input type="submit" value="Logear">
</form>
<?php if (isset($error)):?>
                <i class="icon-warning-sign"><?=$error?></i>
<?php endif?>