<h4 id="method_device_remove"><?php _e("guifi.device.remove")?></h4>

<p><strong><?php _e("Esborra un dispositiu de la xarxa.")?></strong></p>

<div class="alert">
	<h6><?php _e("Vés amb compte")?></h6>
	<p><?php _e("Aquesta acció no té marxa enrere, i un dispositiu esborrat deixarà de mostrar-se a la pàgina web de guifi.net.")?></p>
</div>

<h5 id="method_device_remove_params"><?php _e("Paràmetres")?></h5>

<p><?php _e("L'ordre bàsica d'ús d'aquest mètode conté els camps bàsics descrits a la taula de continuació.")?></p>
<table>
	<colgroup>
		<col class="field_name" />
		<col class="field_type" />
		<col class="field_description" />
		<col class="field_default" />
	</colgroup>
	<thead>
		<tr>
			<th scope="row"><?php _e("Nom")?></th>
			<th scope="row"><?php _e("Tipus")?></th>
			<th scope="row"><?php _e("Descripció")?></th>
			<th scope="row"><?php _e("Per defecte")?></th>
		</tr>
	</thead>
	<tbody>
		<tr class="required">
			<td>device_id</td>
			<td>integer</td>
			<td><?php _e("ID del dispositiu a esborrar.")?></td>
			<td></td>
		</tr>
	</tbody>
</table>