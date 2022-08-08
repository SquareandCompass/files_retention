<?php
/**
 * @copyright Copyright (c) 2016 Joas Schilling <coding@schilljs.com>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

/** @var \OCP\IL10N $l */
?>

<div id="files_retention"></div>

<form id="retention" class="section" data-systemtag-id="">
	<input type="hidden" name="retention_tag" id="retention_tag" placeholder="<?php p($l->t('Select tag…')); ?>" style="width: 400px;" />
	<br>
	<input type="number" id="retention_amount" name="retention_amount" value="10" style="width: 200px;">

	<select id="retention_unit">
		<option value="0"><?php p($l->t('Days')); ?></option>
		<option value="1"><?php p($l->t('Weeks')); ?></option>
		<option value="2"><?php p($l->t('Months')); ?></option>
		<option value="3"><?php p($l->t('Years')); ?></option>
	</select>

	<?php p($l->t('after')); ?>

	<select id="retention_after">
		<option value="0"><?php p($l->t('Creation')); ?></option>
		<option value="1"><?php p($l->t('Last modification')); ?></option>
	</select>

	<input type="button" id="retention_submit" value="<?php p($l->t('Create')); ?>" disabled>
</form>
