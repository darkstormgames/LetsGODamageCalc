<?php
	function printGoFieldInfo($is1v1 = true)
	{
		if ($is1v1)
		{
			echo 
				'<fieldset class="field-info">
					<legend align="center">Field</legend>';
		}
		else	
		{
			echo 
				'<fieldset class="panel panel-default field-info">
					<legend class="panel-heading panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">>  Field</a>
					</legend>
					<div id="collapseTwo" class="panel-collapse collapse">
						<div class="panel-body">';
		}
		
		echo 
			'
				
					<div aria-labelledby="selectBattleFormatInstruction" class="gen-specific g3 g4 g5 g6 g7" role="radiogroup" 
													style="width: 10.6em; margin: 0 auto 5px;" title="Select the battle format.">
						<span class="visually-hidden" id="selectBattleFormatInstruction">Select the battle format.</span>
						<input class="visually-hidden calc-trigger" type="radio" name="format" value="Singles" id="singles-format" checked="checked" />
						<label class="btn btn-left" for="singles-format">Singles</label>
						<input class="visually-hidden calc-trigger" type="radio" name="format" value="Doubles" id="doubles-format" />
						<label class="btn btn-right" for="doubles-format">Doubles</label>
					</div>
					
					<table style="width: 25.6em; margin: 0 auto 5px;" align="center">
						<thead>
							<tr>
								<th scope="col"><div class="visually-hidden">Pok&eacute;mon 1\'s side</div></th>
								<th scope="col"><div class="visually-hidden">Pok&eacute;mon 2\'s side</div></th>
							</tr>
						</thead>
						<tbody>
							<tr class="gen-specific g4 g5 g6 g7">
								<div hidden id="selectStealthRockInstruction">Is Stealth Rock affecting this side of the field?</div>
								<td>
									<div class="left" title="Is Stealth Rock affecting this side of the field?">
										<input aria-describedby="selectStealthRockInstruction" class="visually-hidden calc-trigger" type="checkbox" id="srL" />
										<label class="btn btn-xwide" for="srL">Stealth Rock</label>
									</div>
								</td>
								<td>
									<div class="right" title="Is Stealth Rock affecting this side of the field?">
										<input aria-describedby="selectStealthRockInstruction" class="visually-hidden calc-trigger" type="checkbox" id="srR" />
										<label class="btn btn-xwide" for="srR">Stealth Rock</label>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>
									<div class="left" title="Is this Pok&eacute;mon protected by Reflect and/or Light Screen?">
										<div hidden id="selectScreenInstruction">Is this Pok&eacute;mon protected by Reflect and/or Light Screen?</div>
										<input aria-describedby="selectScreenInstruction" class="visually-hidden calc-trigger" type="checkbox" id="reflectL" />
										<label class="btn btn-left" for="reflectL">Reflect</label>
										<input aria-describedby="selectScreenInstruction" class="visually-hidden calc-trigger" type="checkbox" id="lightScreenL" />
										<label class="btn btn-xwide btn-right" for="lightScreenL">Light Screen</label>
									</div>
								</td>
								<td>
									<div class="right" title="Is this Pok&eacute;mon protected by Reflect and/or Light Screen?">
										<input aria-describedby="selectScreenInstruction" class="visually-hidden calc-trigger" type="checkbox" id="reflectR" />
										<label class="btn btn-left" for="reflectR">Reflect</label>
										<input aria-describedby="selectScreenInstruction" class="visually-hidden calc-trigger" type="checkbox" id="lightScreenR" />
										<label class="btn btn-xwide btn-right" for="lightScreenR">Light Screen</label>
									</div>
								</td>
							</tr>
							<tr class="gen-specific g2 g3 g4 g5 g6 g7">
								<td>
									<div class="left" title="Is this Pok&eacute;mon protected?">
										<div hidden id="selectProtectInstruction">Is this Pok&eacute;mon protected?</div>
										<input aria-describedby="selectProtectInstruction" class="visually-hidden calc-trigger" type="checkbox" id="protectL" />
										<label class="btn btn-wide" for="protectL">Protect</label>
									</div>
								</td>
								<td>
									<div class="right" title="Is this Pok&eacute;mon protected?">
										<input aria-describedby="selectProtectInstruction" class="visually-hidden calc-trigger" type="checkbox" id="protectR" />
										<label class="btn btn-wide" for="protectR">Protect</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="left" title="Has this Pok&eacute;mon been affected by Leech Seed?">
										<div hidden id="selectLeechSeedInstruction">Has this Pok&eacute;mon been affected by Leech Seed?</div>
										<input aria-describedby="selectLeechSeedInstruction" class="visually-hidden calc-trigger" type="checkbox" id="leechSeedL" />
										<label class="btn btn-wide" for="leechSeedL">Leech Seed</label>
									</div>
								</td>
								<td>
									<div class="right" title="Has this Pok&eacute;mon been affected by Leech Seed?">
										<input aria-describedby="selectLeechSeedInstruction" class="visually-hidden calc-trigger" type="checkbox" id="leechSeedR" />
										<label class="btn btn-wide" for="leechSeedR">Leech Seed</label>
									</div>
								</td>
							</tr>
							
							<tr class="gen-specific g3 g4 g5 g6 g7">
								<td>
									<div class="left" title="Has this Pok&eacute;mon\'s power been boosted by an ally\'s Helping Hand?">
										<div hidden id="selectHelpingHandInstruction">Has this Pok&eacute;mon\'s power been boosted by an ally\'s Helping Hand?</div>
										<input aria-describedby="selectHelpingHandInstruction" class="visually-hidden calc-trigger" type="checkbox" id="helpingHandL" />
										<label class="btn btn-xxwide" for="helpingHandL">Helping Hand</label>
									</div>
								</td>
								<td>
									<div class="right" title="Has this Pok&eacute;mon\'s power been boosted by an ally\'s Helping Hand?">
										<input aria-describedby="selectHelpingHandInstruction" class="visually-hidden calc-trigger" type="checkbox" id="helpingHandR" />
										<label class="btn btn-xxwide" for="helpingHandR">Helping Hand</label>
									</div>
								</td>
							</tr>
							
						</tbody>
					</table>';
		
		if (!$is1v1)
		{
			echo '</div></div>';
		}
		
		echo '	</fieldset>';
	}
	
	function printHiddenFieldInfo()
	{
		echo
			'<div aria-label="Field information" role="region" style="display: none;">
				<fieldset class="field-info">
					<legend align="center">Field</legend>
					<div aria-labelledby="selectBattleFormatInstruction" class="gen-specific g3 g4 g5 g6 g7" role="radiogroup" style="width: 10.6em; margin: 0 auto 5px;" title="Select the battle format.">
						<span class="visually-hidden" id="selectBattleFormatInstruction">Select the battle format.</span>
						<input class="visually-hidden calc-trigger" type="radio" name="format" value="Singles" id="singles-format" checked="checked" />
						<label class="btn btn-left" for="singles-format">Singles</label>
						<input class="visually-hidden calc-trigger" type="radio" name="format" value="Doubles" id="doubles-format" />
						<label class="btn btn-right" for="doubles-format">Doubles</label>
					</div>
					<div aria-labelledby="selectTerrainInstruction" class="gen-specific g6 g7" role="group" title="Select the current terrain.">
						<span class="visually-hidden" id="selectTerrainInstruction">Select the current terrain.</span>
						<input class="visually-hidden terrain-trigger calc-trigger" type="checkbox" name="terrain" value="Electric" id="electric" /><label class="btn btn-xxxwide btn-left" for="electric">Electric Terrain</label>
						<input class="visually-hidden terrain-trigger calc-trigger" type="checkbox" name="terrain" value="Grassy" id="grassy" /><label class="btn btn-xxxwide btn-mid" for="grassy">Grassy Terrain</label>
						<input class="visually-hidden terrain-trigger calc-trigger" type="checkbox" name="terrain" value="Misty" id="misty" /><label class="btn btn-xxxwide btn-right" for="misty">Misty Terrain</label>
						<input class="visually-hidden terrain-trigger calc-trigger" type="checkbox" name="terrain" value="Psychic" id="psychic" /><label class="btn btn-xxxwide btn-mid" for="psychic">Psychic Terrain</label>
					</div>
					<hr class="gen-specific g6 g7" />
					<div aria-labelledby="selectWeatherInstruction" role="radiogroup">
						<span class="visually-hidden" id="selectWeatherInstruction">Select the current weather condition.</span>
						<div class="gen-specific g3 g4 g5 g6 g7" style="width: 22.2em; margin: 5px auto;" title="Select the current weather condition.">
							<input class="visually-hidden calc-trigger" type="radio" name="weather" value="" id="clear" checked="checked" />
							<label class="btn btn-small btn-left" for="clear">None</label>
							<input class="visually-hidden calc-trigger" type="radio" name="weather" value="Sun" id="sun" />
							<label class="btn btn-small btn-mid" for="sun">Sun</label>
							<input class="visually-hidden calc-trigger" type="radio" name="weather" value="Rain" id="rain" />
							<label class="btn btn-small btn-mid" for="rain">Rain</label>
							<input class="visually-hidden calc-trigger" type="radio" name="weather" value="Sand" id="sand" />
							<label class="btn btn-small btn-mid" for="sand">Sand</label>
							<input class="visually-hidden calc-trigger" type="radio" name="weather" value="Hail" id="hail" />
							<label class="btn btn-small btn-right" for="hail">Hail</label>
						</div>
						<div class="gen-specific g6 g7" title="Select the current weather condition.">
							<input class="visually-hidden calc-trigger" type="radio" name="weather" value="Harsh Sunshine" id="harsh-sunshine" />
							<label class="btn btn-xxxwide btn-left" for="harsh-sunshine">Harsh Sunshine</label>
							<input class="visually-hidden calc-trigger" type="radio" name="weather" value="Heavy Rain" id="heavy-rain" />
							<label class="btn btn-xxxwide btn-mid" for="heavy-rain">Heavy Rain</label>
							<input class="visually-hidden calc-trigger" type="radio" name="weather" value="Strong Winds" id="strong-winds" />
							<label class="btn btn-xxxwide btn-right" for="strong-winds">Strong Winds</label>
						</div>
					</div>
					<div aria-labelledby="selectGscWeatherInstruction" class="gen-specific g2 hide" role="radiogroup" style="width: 17.8em; margin: 0 auto 5px;" title="Select the current weather condition.">
						<span class="visually-hidden" id="selectGscWeatherInstruction">Select the current weather condition.</span>
						<input class="visually-hidden calc-trigger" type="radio" name="gscWeather" value="" id="gscClear" checked="checked" />
						<label class="btn btn-small btn-left" for="gscClear">None</label>
						<input class="visually-hidden calc-trigger" type="radio" name="gscWeather" value="Sun" id="gscSun" />
						<label class="btn btn-small btn-mid" for="gscSun">Sun</label>
						<input class="visually-hidden calc-trigger" type="radio" name="gscWeather" value="Rain" id="gscRain" />
						<label class="btn btn-small btn-mid" for="gscRain">Rain</label>
						<input class="visually-hidden calc-trigger" type="radio" name="gscWeather" value="Sand" id="gscSand" />
						<label class="btn btn-small btn-right" for="gscSand">Sand</label>
					</div>
					<div class="gen-specific g4 g5 g6 g7" style="width: 5.3em; margin: 5px auto;" title="Is gravity in effect?">
						<span hidden id="gravityInstruction">Is gravity in effect?</span>
						<input aria-describedby="gravityInstruction" class="visually-hidden calc-trigger" type="checkbox" id="gravity" />
						<label class="btn" for="gravity">Gravity</label>
					</div>
					<hr class="gen-specific g2 g3 g4 g5 g6 g7" />
					<table>
						<thead>
							<tr>
								<th scope="col"><div class="visually-hidden">Pok&eacute;mon 1\'s side</div></th>
								<th scope="col"><div class="visually-hidden">Pok&eacute;mon 2\'s side</div></th>
							</tr>
						</thead>
						<tbody>
							<tr class="gen-specific g4 g5 g6 g7">
								<div hidden id="selectStealthRockInstruction">Is Stealth Rock affecting this side of the field?</div>
								<td>
									<div class="left" title="Is Stealth Rock affecting this side of the field?">
										<input aria-describedby="selectStealthRockInstruction" class="visually-hidden calc-trigger" type="checkbox" id="srL" />
										<label class="btn btn-xwide" for="srL">Stealth Rock</label>
									</div>
								</td>
								<td>
									<div class="right" title="Is Stealth Rock affecting this side of the field?">
										<input aria-describedby="selectStealthRockInstruction" class="visually-hidden calc-trigger" type="checkbox" id="srR" />
										<label class="btn btn-xwide" for="srR">Stealth Rock</label>
									</div>
								</td>
							</tr>
							<tr class="gen-specific g3 g4 g5 g6 g7">
								<div hidden id="selectSpikeInstruction">Are there Spikes on this side of the field?</div>
								<td>
									<div aria-labelledby="selectSpikeInstruction" class="left" role="radiogroup" title="Are there Spikes on this side of the field?">
										<input class="visually-hidden calc-trigger" type="radio" name="spikesL" value="0" id="spikesL0" checked="checked" />
										<label class="btn btn-xsmall btn-left" for="spikesL0">0</label>
										<input class="visually-hidden calc-trigger" type="radio" name="spikesL" value="1" id="spikesL1" />
										<label class="btn btn-xsmall btn-mid" for="spikesL1">1</label>
										<input class="visually-hidden calc-trigger" type="radio" name="spikesL" value="2" id="spikesL2" />
										<label class="btn btn-xsmall btn-mid" for="spikesL2">2</label>
										<input class="visually-hidden calc-trigger" type="radio" name="spikesL" value="3" id="spikesL3" />
										<label class="btn btn-wide btn-right" for="spikesL3">3 Spikes</label>
									</div>
								</td>
								<td>
									<div aria-labelledby="selectSpikeInstruction" class="right" role="radiogroup" title="Are there Spikes on this side of the field?">
										<input class="visually-hidden calc-trigger" type="radio" name="spikesR" value="0" id="spikesR0" checked="checked" />
										<label class="btn btn-xsmall btn-left" for="spikesR0">0</label>
										<input class="visually-hidden calc-trigger" type="radio" name="spikesR" value="1" id="spikesR1" />
										<label class="btn btn-xsmall btn-mid" for="spikesR1">1</label>
										<input class="visually-hidden calc-trigger" type="radio" name="spikesR" value="2" id="spikesR2" />
										<label class="btn btn-xsmall btn-mid" for="spikesR2">2</label>
										<input class="visually-hidden calc-trigger" type="radio" name="spikesR" value="3" id="spikesR3" />
										<label class="btn btn-wide btn-right" for="spikesR3">3 Spikes</label>
									</div>
								</td>
							</tr>
							<tr class="gen-specific g2">
								<td>
									<div class="left" title="Are there Spikes on this side of the field?">
										<input aria-describedby="selectSpikeInstruction" class="visually-hidden calc-trigger" type="checkbox" id="gscSpikesL" />
										<label class="btn" for="gscSpikesL">Spikes</label>
									</div>
								</td>
								<td>
									<div class="right" title="Are there Spikes on this side of the field?">
										<input aria-describedby="selectSpikeInstruction" class="visually-hidden calc-trigger" type="checkbox" id="gscSpikesR" />
										<label class="btn" for="gscSpikesR">Spikes</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="left" title="Is this Pok&eacute;mon protected by Reflect and/or Light Screen?">
										<div hidden id="selectScreenInstruction">Is this Pok&eacute;mon protected by Reflect and/or Light Screen?</div>
										<input aria-describedby="selectScreenInstruction" class="visually-hidden calc-trigger" type="checkbox" id="reflectL" />
										<label class="btn btn-left" for="reflectL">Reflect</label>
										<input aria-describedby="selectScreenInstruction" class="visually-hidden calc-trigger" type="checkbox" id="lightScreenL" />
										<label class="btn btn-xwide btn-right" for="lightScreenL">Light Screen</label>
									</div>
								</td>
								<td>
									<div class="right" title="Is this Pok&eacute;mon protected by Reflect and/or Light Screen?">
										<input aria-describedby="selectScreenInstruction" class="visually-hidden calc-trigger" type="checkbox" id="reflectR" />
										<label class="btn btn-left" for="reflectR">Reflect</label>
										<input aria-describedby="selectScreenInstruction" class="visually-hidden calc-trigger" type="checkbox" id="lightScreenR" />
										<label class="btn btn-xwide btn-right" for="lightScreenR">Light Screen</label>
									</div>
								</td>
							</tr>
							<tr class="gen-specific g2 g3 g4 g5 g6 g7">
								<td>
									<div class="left" title="Is this Pok&eacute;mon protected?">
										<div hidden id="selectProtectInstruction">Is this Pok&eacute;mon protected?</div>
										<input aria-describedby="selectProtectInstruction" class="visually-hidden calc-trigger" type="checkbox" id="protectL" />
										<label class="btn btn-wide" for="protectL">Protect</label>
									</div>
								</td>
								<td>
									<div class="right" title="Is this Pok&eacute;mon protected?">
										<input aria-describedby="selectProtectInstruction" class="visually-hidden calc-trigger" type="checkbox" id="protectR" />
										<label class="btn btn-wide" for="protectR">Protect</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="left" title="Has this Pok&eacute;mon been affected by Leech Seed?">
										<div hidden id="selectLeechSeedInstruction">Has this Pok&eacute;mon been affected by Leech Seed?</div>
										<input aria-describedby="selectLeechSeedInstruction" class="visually-hidden calc-trigger" type="checkbox" id="leechSeedL" />
										<label class="btn btn-wide" for="leechSeedL">Leech Seed</label>
									</div>
								</td>
								<td>
									<div class="right" title="Has this Pok&eacute;mon been affected by Leech Seed?">
										<input aria-describedby="selectLeechSeedInstruction" class="visually-hidden calc-trigger" type="checkbox" id="leechSeedR" />
										<label class="btn btn-wide" for="leechSeedR">Leech Seed</label>
									</div>
								</td>
							</tr>
							<tr class="gen-specific g2 g3 g4 g5 g6 g7">
								<td>
									<div class="left" title="Has this Pok&eacute;mon been revealed with Foresight or Odor Sleuth?">
										<div hidden id="selectRevealInstruction">Has this Pok&eacute;mon been revealed with Foresight or Odor Sleuth?</div>
										<input aria-describedby="selectRevealInstruction" class="visually-hidden calc-trigger" type="checkbox" id="foresightL" />
										<label class="btn btn-wide" for="foresightL">Foresight</label>
									</div>
								</td>
								<td>
									<div class="right" title="Has this Pok&eacute;mon been revealed with Foresight or Odor Sleuth?">
										<input aria-describedby="selectRevealInstruction" class="visually-hidden calc-trigger" type="checkbox" id="foresightR" />
										<label class="btn btn-wide" for="foresightR">Foresight</label>
									</div>
								</td>
							</tr>
							<tr class="gen-specific g3 g4 g5 g6 g7">
								<td>
									<div class="left" title="Has this Pok&eacute;mon\'s power been boosted by an ally\'s Helping Hand?">
										<div hidden id="selectHelpingHandInstruction">Has this Pok&eacute;mon\'s power been boosted by an ally\'s Helping Hand?</div>
										<input aria-describedby="selectHelpingHandInstruction" class="visually-hidden calc-trigger" type="checkbox" id="helpingHandL" />
										<label class="btn btn-xxwide" for="helpingHandL">Helping Hand</label>
									</div>
								</td>
								<td>
									<div class="right" title="Has this Pok&eacute;mon\'s power been boosted by an ally\'s Helping Hand?">
										<input aria-describedby="selectHelpingHandInstruction" class="visually-hidden calc-trigger" type="checkbox" id="helpingHandR" />
										<label class="btn btn-xxwide" for="helpingHandR">Helping Hand</label>
									</div>
								</td>
							</tr>
							<tr class="gen-specific g5 g6 g7">
								<td>
									<div class="left" title="Is the Pok&eacute;mon protected by an ally\'s Friend Guard?">
										<div hidden id="selectFriendGuardInstruction">Is the Pok&eacute;mon protected by an ally\'s Friend Guard?</div>
										<input aria-describedby="selectFriendGuardInstruction" class="visually-hidden calc-trigger" type="checkbox" id="friendGuardL" />
										<label class="btn btn-xxwide" for="friendGuardL">Friend Guard</label>
									</div>
								</td>
								<td>
									<div class="right" title="Is the Pok&eacute;mon protected by an ally\'s Friend Guard?">
										<input aria-describedby="selectFriendGuardInstruction" class="visually-hidden calc-trigger" type="checkbox" id="friendGuardR" />
										<label class="btn btn-xxwide" for="friendGuardR">Friend Guard</label>
									</div>
								</td>
							</tr>
							<tr class="gen-specific g7">
								<td>
									<div class="left" title="Is the Pok&eacute;mon protected by an ally\'s Aurora Veil?">
										<div hidden id="selectAuroraVeilInstruction">Is the Pok&eacute;mon protected by an ally\'s Aurora Veil?</div>
										<input aria-describedby="selectAuroraVeilInstruction" class="visually-hidden calc-trigger" type="checkbox" id="auroraVeilL" />
										<label class="btn btn-xxwide" for="auroraVeilL">Aurora Veil</label>
									</div>
								</td>
								<td>
									<div class="right" title="Is the Pok&eacute;mon protected by an ally\'s Aurora Veil?">
										<input aria-describedby="selectAuroraVeilInstruction" class="visually-hidden calc-trigger" type="checkbox" id="auroraVeilR" />
										<label class="btn btn-xxwide" for="auroraVeilR">Aurora Veil</label>
									</div>
								</td>
							</tr>
							<tr class="gen-specific g7">
								<td>
									<div class="left" title="Has the Pok&eacute;mon boosted all its stats one stage?">
										<div hidden id="selectStatBoostInstruction">Has the Pok&eacute;mon boosted all its stats one stage?</div>
										<input aria-describedby="selectStatBoostInstruction" class="visually-hidden calc-trigger" type="checkbox" id="StatBoostL" />
										<label class="btn btn-xxwide" for="StatBoostL">+1 All Stats</label>
									</div>
								</td>
								<td>
									<div class="right" title="Has the Pok&eacute;mon boosted all its stats one stage?">
										<input aria-describedby="selectStatBoostInstruction" class="visually-hidden calc-trigger" type="checkbox" id="StatBoostR" />
										<label class="btn btn-xxwide" for="StatBoostR">+1 All Stats</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="left" title="Export the leftmost Pok&eacute;mon set">
										<button id="exportL">Export</button>
									</div>
								</td>
								<td>
									<div class="right" title="Export the rightmost Pok&eacute;mon set">
										<button id="exportR">Export</button>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</fieldset>
			</div>';
	}
	
	
	function printExportView()
	{
		echo 
			'<div aria-label="Import team" role="region" style="visibility: hidden;">
				<fieldset class="poke-import">
					<legend align="center">Import / Export</legend>
					<div id="import-1_wrapper" class="dataTables_wrapper no-footer">
						<form class="import-team">
							<textarea class="import-team-text"></textarea>
							<!--<button style=\'position:absolute\' class=\'bs-btn bs-btn-default\'>Import</button>-->
						</form>
					</div>
				</fieldset>
			</div>';
	}


	
	
	
	
	// honkalculate field-info old
	
/*<!--<fieldset class="panel panel-default field-info">
	<legend class="panel-heading panel-title">
		<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">>  Field</a>
	</legend>
	<div id="collapseTwo" class="panel-collapse collapse">
		<div class="panel-body">
			<div class="gen-specific g3 g4 g5 g6 g7" style="width: 10.6em; margin: 0 auto 5px;" title="Select the battle format.">
				<input class="visually-hidden" type="radio" name="format" value="Singles" id="singles-format" checked="checked" />
				<label class="btn btn-left" for="singles-format">Singles</label>
				<input class="visually-hidden" type="radio" name="format" value="Doubles" id="doubles-format" />
				<label class="btn btn-right" for="doubles-format">Doubles</label>
			</div>
			<div class="gen-specific g6 g7" title="Select the current terrain." style="display: none;">
				<input class="visually-hidden terrain-trigger calc-trigger" type="checkbox" name="terrain" value="Electric" id="electric" /><label class="btn btn-xxxwide btn-left" for="electric">Electric Terrain</label>
				<input class="visually-hidden terrain-trigger calc-trigger" type="checkbox" name="terrain" value="Grassy" id="grassy" /><label class="btn btn-xxxwide btn-mid" for="grassy">Grassy Terrain</label>
				<input class="visually-hidden terrain-trigger calc-trigger" type="checkbox" name="terrain" value="Misty" id="misty" /><label class="btn btn-xxxwide btn-right" for="misty">Misty Terrain</label>
			</div>
			<div class="gen-specific g7" title="Select the current terrain." style="display: none;">
				<input class="visually-hidden terrain-trigger calc-trigger" type="checkbox" name="terrain" value="Psychic" id="psychic" /><label class="btn btn-xxxwide btn-mid" for="psychic">Psychic Terrain</label>
			</div>
			<hr class="gen-specific g6 g7" />
			<div class="gen-specific g3 g4 g5 g6 g7" style="width: 22.2em; margin: 5px auto; display: none" title="Select the current weather condition.">
				<input class="visually-hidden" type="radio" name="weather" value="" id="clear" checked="checked" />
				<label class="btn btn-small btn-left" for="clear">None</label>
				<input class="visually-hidden" type="radio" name="weather" value="Sun" id="sun" />
				<label class="btn btn-small btn-mid" for="sun">Sun</label>
				<input class="visually-hidden" type="radio" name="weather" value="Rain" id="rain" />
				<label class="btn btn-small btn-mid" for="rain">Rain</label>
				<input class="visually-hidden" type="radio" name="weather" value="Sand" id="sand" />
				<label class="btn btn-small btn-mid" for="sand">Sand</label>
				<input class="visually-hidden" type="radio" name="weather" value="Hail" id="hail" />
				<label class="btn btn-small btn-right" for="hail">Hail</label>
			</div>
			<div class="gen-specific g6 g7" title="Select the current weather condition." style="display: none;">
				<input class="visually-hidden" type="radio" name="weather" value="Harsh Sunshine" id="harsh-sunshine" />
				<label class="btn btn-xxxwide btn-left" for="harsh-sunshine">Harsh Sunshine</label>
				<input class="visually-hidden" type="radio" name="weather" value="Heavy Rain" id="heavy-rain" />
				<label class="btn btn-xxxwide btn-mid" for="heavy-rain">Heavy Rain</label>
				<input class="visually-hidden" type="radio" name="weather" value="Strong Winds" id="strong-winds" />
				<label class="btn btn-xxxwide btn-right" for="strong-winds">Strong Winds</label>
			</div>
			<div class="gen-specific g2 hide" style="width: 17.8em; margin: 0 auto 5px; display: none" title="Select the current weather condition.">
				<input class="visually-hidden" type="radio" name="gscWeather" value="" id="gscClear" checked="checked" />
				<label class="btn btn-small btn-left" for="gscClear">None</label>
				<input class="visually-hidden" type="radio" name="gscWeather" value="Sun" id="gscSun" />
				<label class="btn btn-small btn-mid" for="gscSun">Sun</label>
				<input class="visually-hidden" type="radio" name="gscWeather" value="Rain" id="gscRain" />
				<label class="btn btn-small btn-mid" for="gscRain">Rain</label>
				<input class="visually-hidden" type="radio" name="gscWeather" value="Sand" id="gscSand" />
				<label class="btn btn-small btn-right" for="gscSand">Sand</label>
			</div>
			<div class="gen-specific g4 g5 g6 g7" style="width: 5.3em; margin: 5px auto; display: none" title="Is gravity in effect?">
				<input class="visually-hidden" type="checkbox" id="gravity" />
				<label class="btn" for="gravity">Gravity</label>
			</div>
			<hr class="gen-specific g2 g3 g4 g5 g6 g7" />
			<div class="btn-group gen-specific g4 g5 g6 g7">
				<div class="left" title="Is Stealth Rock affecting this side of the field?">
					<input class="visually-hidden" type="checkbox" id="srL" />
					<label class="btn btn-xwide" for="srL">Stealth Rock</label>
				</div>
				<div class="right" title="Is Stealth Rock affecting this side of the field?">
					<input class="visually-hidden" type="checkbox" id="srR" />
					<label class="btn btn-xwide" for="srR">Stealth Rock</label>
				</div>
			</div>
			<div class="btn-group gen-specific g3 g4 g5 g6 g7" style="display: none;">
				<div class="left" title="Are there Spikes on this side of the field?">
					<input class="visually-hidden" type="radio" name="spikesL" value="0" id="spikesL0" checked="checked" />
					<label class="btn btn-xsmall btn-left" for="spikesL0">0</label>
					<input class="visually-hidden" type="radio" name="spikesL" value="1" id="spikesL1" />
					<label class="btn btn-xsmall btn-mid" for="spikesL1">1</label>
					<input class="visually-hidden" type="radio" name="spikesL" value="2" id="spikesL2" />
					<label class="btn btn-xsmall btn-mid" for="spikesL2">2</label>
					<input class="visually-hidden" type="radio" name="spikesL" value="3" id="spikesL3" />
					<label class="btn btn-wide btn-right" for="spikesL3">3 Spikes</label>
				</div>
				<div class="right" title="Are there Spikes on this side of the field?">
					<input class="visually-hidden" type="radio" name="spikesR" value="0" id="spikesR0" checked="checked" />
					<label class="btn btn-xsmall btn-left" for="spikesR0">0</label>
					<input class="visually-hidden" type="radio" name="spikesR" value="1" id="spikesR1" />
					<label class="btn btn-xsmall btn-mid" for="spikesR1">1</label>
					<input class="visually-hidden" type="radio" name="spikesR" value="2" id="spikesR2" />
					<label class="btn btn-xsmall btn-mid" for="spikesR2">2</label>
					<input class="visually-hidden" type="radio" name="spikesR" value="3" id="spikesR3" />
					<label class="btn btn-wide btn-right" for="spikesR3">3 Spikes</label>
				</div>
			</div>
			<div class="btn-group gen-specific g2" style="display: none;">
				<div class="left" title="Are there Spikes on this side of the field?">
					<input class="visually-hidden" type="checkbox" id="gscSpikesL" />
					<label class="btn" for="gscSpikesL">Spikes</label>
				</div>
				<div class="right" title="Are there Spikes on this side of the field?">
					<input class="visually-hidden" type="checkbox" id="gscSpikesR" />
					<label class="btn" for="gscSpikesR">Spikes</label>
				</div>
			</div>
			<div class="btn-group">
				<div class="left" title="Is this Pok&eacute;mon protected by Reflect and/or Light Screen?">
					<input class="visually-hidden" type="checkbox" id="reflectL" />
					<label class="btn btn-left" for="reflectL">Reflect</label>
					<input class="visually-hidden" type="checkbox" id="lightScreenL" />
					<label class="btn btn-xwide btn-right" for="lightScreenL">Light Screen</label>
				</div>
				<div class="right" title="Is this Pok&eacute;mon protected by Reflect and/or Light Screen?">
					<input class="visually-hidden" type="checkbox" id="reflectR" />
					<label class="btn btn-left" for="reflectR">Reflect</label>
					<input class="visually-hidden" type="checkbox" id="lightScreenR" />
					<label class="btn btn-xwide btn-right" for="lightScreenR">Light Screen</label>
				</div>
			</div>
			<div class="btn-group gen-specific g2 g3 g4 g5 g6 g7">
				<div class="left" title="Is this Pok&eacute;mon protected?">
					<input class="visually-hidden" type="checkbox" id="protectL" />
					<label class="btn btn-wide" for="protectL">Protect</label>
				</div>
				<div class="right" title="Is this Pok&eacute;mon protected?">
					<input class="visually-hidden" type="checkbox" id="protectR" />
					<label class="btn btn-wide" for="protectR">Protect</label>
				</div>
			</div>
			<div class="btn-group">
				<div class="left" title="Has this Pok&eacute;mon been affected by Leech Seed?">
					<input class="visually-hidden" type="checkbox" id="leechSeedL" />
					<label class="btn btn-wide" for="leechSeedL">Leech Seed</label>
				</div>
				<div class="right" title="Has this Pok&eacute;mon been affected by Leech Seed?">
					<input class="visually-hidden" type="checkbox" id="leechSeedR" />
					<label class="btn btn-wide" for="leechSeedR">Leech Seed</label>
				</div>
			</div>
			<div class="btn-group gen-specific g2 g3 g4 g5 g6 g7">
				<div class="left" title="Has this Pok&eacute;mon been revealed with Foresight or Odor Sleuth?">
					<input class="visually-hidden" type="checkbox" id="foresightL" />
					<label class="btn btn-wide" for="foresightL">Foresight</label>
				</div>
				<div class="right" title="Has this Pok&eacute;mon been revealed with Foresight or Odor Sleuth?">
					<input class="visually-hidden" type="checkbox" id="foresightR" />
					<label class="btn btn-wide" for="foresightR">Foresight</label>
				</div>
			</div>
			<div class="btn-group gen-specific g3 g4 g5 g6 g7">
				<div class="left" title="Has this Pok&eacute;mon's power been boosted by an ally's Helping Hand?">
					<input class="visually-hidden" type="checkbox" id="helpingHandL" />
					<label class="btn btn-xxwide" for="helpingHandL">Helping Hand</label>
				</div>
				<div class="right" title="Has this Pok&eacute;mon's power been boosted by an ally's Helping Hand?">
					<input class="visually-hidden" type="checkbox" id="helpingHandR" />
					<label class="btn btn-xxwide" for="helpingHandR">Helping Hand</label>
				</div>
			</div>
			<div class="btn-group gen-specific g5 g6 g7">
				<div class="left" title="Is the Pok&eacute;mon protected by an ally's Friend Guard?">
					<input class="visually-hidden" type="checkbox" id="friendGuardL" />
					<label class="btn btn-xxwide" for="friendGuardL">Friend Guard</label>
				</div>
				<div class="right" title="Is the Pok&eacute;mon protected by an ally's Friend Guard?">
					<input class="visually-hidden" type="checkbox" id="friendGuardR" />
					<label class="btn btn-xxwide" for="friendGuardR">Friend Guard</label>
				</div>
			</div>
			<div class="btn-group gen-specific g7">
				<div class="left" title="Is the Pok&eacute;mon protected by an ally's Aurora Veil?">
					<input class="visually-hidden" type="checkbox" id="auroraVeilL" />
					<label class="btn btn-xxwide" for="auroraVeilL">Aurora Veil</label>
				</div>
				<div class="right" title="Is the Pok&eacute;mon protected by an ally's Aurora Veil?">
					<input class="visually-hidden" type="checkbox" id="auroraVeilR" />
					<label class="btn btn-xxwide" for="auroraVeilR">Aurora Veil</label>
				</div>
			</div>
		</div>
	</div>
</fieldset>-->*/
	
	
?>