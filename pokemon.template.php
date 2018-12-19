<?php
	function printPokemon($pokeid, $is1v1 = true)
	{
		if ($is1v1)
		{
			echo
'<fieldset class="poke-info" id="p'. $pokeid .'">
	<legend align="center">Pok&eacute;mon '. $pokeid .'</legend>
	<input type="text" class="set-selector calc-trigger" />
	<span id="importedSetsOptions" style="width:auto; display:none">
		<input type="checkbox" id="importedSets" /> Only show imported sets <br />
		<button id="clearSets">Clear Custom Sets</button>
	</span>
';
		}
		else
		{
			echo 
'<fieldset class="panel panel-default poke-info" id="p1">
	<legend class="panel-heading panel-title">
		<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">>  Pokemon</a>
	</legend>
	<div id="collapseOne" class="panel-collapse collapse in">
		<div class="panel-body">
			<input type="text" class="set-selector" />
				';
		}	
		
		
		echo 
	'<div class="info-group">
		<div>
			<label>Typ</label>
			<select aria-label="type1" class="type1 terrain-trigger calc-trigger"></select>
			<select aria-label="type2" class="type2 terrain-trigger calc-trigger"></select>
		</div>
		<div class="hide">
			<label>Form</label>
			<select class="forme calc-trigger"></select>
		</div>
		<div class="hide">
			<label>Geschlecht</label>
			<select class="gender calc-trigger">
				<option></option>
				<option selected="selected">Männlich</option>
				<option>Weiblich</option>
			</select>
		</div>
		<div>
			<label for="levelL1">Level</label>
			<input class="level calc-trigger" id="levelL1" value="50" />
		</div>
		<div class="hide">
			<label for="weightL1">Gewicht (kg)</label>
			<input class="weight calc-trigger" id="weightL1" value="10.0" />
		</div>
	</div>
	<div class="info-group">
		<table>
			<thead>
				<tr>
					<th></th>
					<th scope="col">Basis</th>
					<th class="gen-specific g3 g4 g5 g6 g7" scope="col">DV</th>
					<th class="gen-specific g3 g4 g5 g6" scope="col">EVs</th>
					<th class="gen-specific g1 g2 hide" scope="col">DVs</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr class="hp">
					<th scope="row">
						<label>HP</label>
					</th>
					<td>
						<input class="base calc-trigger" value="100" />
					</td>
					<td class="gen-specific g3 g4 g5 g6 g7">
						<input class="ivs calc-trigger" value="31" />
					</td>
					<td class="gen-specific g3 g4 g5 g6">
						<input class="evs calc-trigger" type="number" min="0" max="252" step="4" value="0" />
					</td>
					<td class="gen-specific g1 g2 hide">
						<input class="dvs calc-trigger" value="15" disabled="disabled" />
					</td>
					<td>
						<span class="total">341</span>
					</td>
					<td></td>
				</tr>
				<tr class="at">
					<th scope="row">
						<label>Attack</label>
					</th>
					<td>
						<input class="base calc-trigger" value="100" />
					</td>
					<td class="gen-specific g3 g4 g5 g6 g7">
						<input class="ivs calc-trigger" value="31" />
					</td>
					<td class="gen-specific g3 g4 g5 g6">
						<input class="evs calc-trigger" type="number" min="0" max="252" step="4" value="0" />
					</td>
					<td class="gen-specific g1 g2 hide">
						<input class="dvs calc-trigger" value="15" />
					</td>
					<td>
						<span class="total">236</span>
					</td>
					<td>
						<select class="boost calc-trigger">
							<option value="6">+6</option>
							<option value="5">+5</option>
							<option value="4">+4</option>
							<option value="3">+3</option>
							<option value="2">+2</option>
							<option value="1">+1</option>
							<option value="0" selected="selected">--</option>
							<option value="-1">-1</option>
							<option value="-2">-2</option>
							<option value="-3">-3</option>
							<option value="-4">-4</option>
							<option value="-5">-5</option>
							<option value="-6">-6</option>
						</select>
					</td>
				</tr>
				<tr class="df">
					<th scope="row">
						<label>Defense</label>
					</th>
					<td>
						<input class="base calc-trigger" value="100" />
					</td>
					<td class="gen-specific g3 g4 g5 g6 g7">
						<input class="ivs calc-trigger" value="31" />
					</td>
					<td class="gen-specific g3 g4 g5 g6">
						<input class="evs calc-trigger" type="number" min="0" max="252" step="4" value="0" />
					</td>
					<td class="gen-specific g1 g2 hide">
						<input class="dvs calc-trigger" value="15" />
					</td>
					<td>
						<span class="total">236</span>
					</td>
					<td>
						<select class="boost calc-trigger">
							<option value="6">+6</option>
							<option value="5">+5</option>
							<option value="4">+4</option>
							<option value="3">+3</option>
							<option value="2">+2</option>
							<option value="1">+1</option>
							<option value="0" selected="selected">--</option>
							<option value="-1">-1</option>
							<option value="-2">-2</option>
							<option value="-3">-3</option>
							<option value="-4">-4</option>
							<option value="-5">-5</option>
							<option value="-6">-6</option>
						</select>
					</td>
				</tr>
				<tr class="sa gen-specific g2 g3 g4 g5 g6 g7">
					<th scope="row">
						<label>Sp. Atk</label>
					</th>
					<td>
						<input class="base calc-trigger" value="100" />
					</td>
					<td class="gen-specific g3 g4 g5 g6 g7">
						<input class="ivs calc-trigger" value="31" />
					</td>
					<td class="gen-specific g3 g4 g5 g6">
						<input class="evs calc-trigger" type="number" min="0" max="252" step="4" value="0" />
					</td>
					<td class="gen-specific g1 g2 hide">
						<input class="dvs calc-trigger" value="15" />
					</td>
					<td>
						<span class="total">236</span>
					</td>
					<td>
						<select class="boost calc-trigger">
							<option value="6">+6</option>
							<option value="5">+5</option>
							<option value="4">+4</option>
							<option value="3">+3</option>
							<option value="2">+2</option>
							<option value="1">+1</option>
							<option value="0" selected="selected">--</option>
							<option value="-1">-1</option>
							<option value="-2">-2</option>
							<option value="-3">-3</option>
							<option value="-4">-4</option>
							<option value="-5">-5</option>
							<option value="-6">-6</option>
						</select>
					</td>
				</tr>
				<tr class="sd gen-specific g2 g3 g4 g5 g6 g7">
					<th scope="row">
						<label>Sp. Def</label>
					</th>
					<td>
						<input class="base calc-trigger" value="100" />
					</td>
					<td class="gen-specific g3 g4 g5 g6 g7">
						<input class="ivs calc-trigger" value="31" />
					</td>
					<td class="gen-specific g3 g4 g5 g6">
						<input class="evs calc-trigger" type="number" min="0" max="252" step="4" value="0" />
					</td>
					<td class="gen-specific g1 g2 hide">
						<input class="dvs calc-trigger" value="15" disabled="disabled" />
					</td>
					<td>
						<span class="total">236</span>
					</td>
					<td>
						<select class="boost calc-trigger">
							<option value="6">+6</option>
							<option value="5">+5</option>
							<option value="4">+4</option>
							<option value="3">+3</option>
							<option value="2">+2</option>
							<option value="1">+1</option>
							<option value="0" selected="selected">--</option>
							<option value="-1">-1</option>
							<option value="-2">-2</option>
							<option value="-3">-3</option>
							<option value="-4">-4</option>
							<option value="-5">-5</option>
							<option value="-6">-6</option>
						</select>
					</td>
				</tr>
				<tr class="sl gen-specific g1 hide">
					<th scope="row">
						<label>Special</label>
					</th>
					<td>
						<input class="base calc-trigger" value="100" />
					</td>
					<td>
						<input class="dvs calc-trigger" value="15" />
					</td>
					<td>
						<span class="total">236</span>
					</td>
					<td>
						<select class="boost calc-trigger">
							<option value="6">+6</option>
							<option value="5">+5</option>
							<option value="4">+4</option>
							<option value="3">+3</option>
							<option value="2">+2</option>
							<option value="1">+1</option>
							<option value="0" selected="selected">--</option>
							<option value="-1">-1</option>
							<option value="-2">-2</option>
							<option value="-3">-3</option>
							<option value="-4">-4</option>
							<option value="-5">-5</option>
							<option value="-6">-6</option>
						</select>
					</td>
				</tr>
				<tr class="sp">
					<th scope="row">
						<label>Speed</label>
					</th>
					<td>
						<input class="base calc-trigger" value="100" />
					</td>
					<td class="gen-specific g3 g4 g5 g6 g7">
						<input class="ivs calc-trigger" value="31" />
					</td>
					<td class="gen-specific g3 g4 g5 g6">
						<input class="evs calc-trigger" type="number" min="0" max="252" step="4" value="0" />
					</td>
					<td class="gen-specific g1 g2 hide">
						<input class="dvs calc-trigger" value="15" />
					</td>
					<td>
						<span class="total">236</span>
					</td>
					<td>
						<select class="boost calc-trigger">
							<option value="6">+6</option>
							<option value="5">+5</option>
							<option value="4">+4</option>
							<option value="3">+3</option>
							<option value="2">+2</option>
							<option value="1">+1</option>
							<option value="0" selected="selected">--</option>
							<option value="-1">-1</option>
							<option value="-2">-2</option>
							<option value="-3">-3</option>
							<option value="-4">-4</option>
							<option value="-5">-5</option>
							<option value="-6">-6</option>
						</select>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="info-group info-selectors">
		<div class="gen-specific g3 g4 g5 g6 g7">
			<label for="natureL1">Nature</label>
			<select class="nature calc-trigger" id="natureL1">
				<option value="Adamant">Hart (+Atk, -SpA)</option>
				<option value="Bashful">Robust</option>
				<option value="Bold">Kühn (+Def, -Atk)</option>
				<option value="Brave">Mutig (+Atk, -Spe)</option>
				<option value="Calm">Still (+SpD, -Atk)</option>
				<option value="Careful">Sacht (+SpD, -SpA)</option>
				<option value="Docile">Sanft</option>
				<option value="Gentle">Zart (+SpD, -Def)</option>
				<option value="Hardy" selected="selected">Zaghaft</option>
				<option value="Hasty">Hastig (+Spe, -Def)</option>
				<option value="Impish">Pfiffig (+Def, -SpA)</option>
				<option value="Jolly">Froh (+Spe, -SpA)</option>
				<option value="Lax">Lasch (+Def, -SpD)</option>
				<option value="Lonely">Solo (+Atk, -Def)</option>
				<option value="Mild">Mild (+SpA, -Def)</option>
				<option value="Modest">Mäßig (+SpA, -Atk)</option>
				<option value="Naive">Naiv (+Spe, -SpD)</option>
				<option value="Naughty">Frech (+Atk, -SpD)</option>
				<option value="Quiet">Ruhig (+SpA, -Spe)</option>
				<option value="Quirky">Kauzig</option>
				<option value="Rash">Hitzig (+SpA, -SpD)</option>
				<option value="Relaxed">Locker (+Def, -Spe)</option>
				<option value="Sassy">Forsch (+SpD, -Spe)</option>
				<option value="Serious">Ernst</option>
				<option value="Timid">Scheu (+Spe, -Atk)</option>
			</select>
		</div>
		<div style="display: none;" class="gen-specific g3 g4 g5 g6">
			<label for="abilityL1">Ability</label>
			<select class="ability terrain-trigger calc-trigger" id="abilityL1"></select>
		</div>
		<div style="display: none;" class="gen-specific g2 g3 g4 g5 g6">
			<label for="itemL1">Item</label>
			<select class="item terrain-trigger calc-trigger" id="itemL1"></select>
		</div>
		<div>
			<label for="statusL1">Status</label>
			<select class="status calc-trigger" id="statusL1">
				<option value="Healthy">Gesund</option>
				<option value="Poisoned">Vergiftet</option>
				<option value="Badly Poisoned">Schwer vergiftet</option>
				<option value="Burned">Verbrannt</option>
				<option value="Paralyzed">Paralysiert</option>
				<option value="Asleep">Schläft</option>
				<option value="Frozen">Eingefroren</option>
			</select>
			<select aria-label="Toxic counter" class="toxic-counter calc-trigger hide">
				<option value="1">1/16</option>
				<option value="2">2/16</option>
				<option value="3">3/16</option>
				<option value="4">4/16</option>
				<option value="5">5/16</option>
				<option value="6">6/16</option>
				<option value="7">7/16</option>
				<option value="8">8/16</option>
				<option value="9">9/16</option>
				<option value="10">10/16</option>
				<option value="11">11/16</option>
				<option value="12">12/16</option>
				<option value="13">13/16</option>
				<option value="14">14/16</option>
				<option value="15">15/16</option>
			</select>
		</div>
	</div>
	<div class="info-group">
		<label for="currentHpL1">Aktuelle KP</label>
		<input class="current-hp calc-trigger" id="currentHpL1" value="341" />/<span class="max-hp">341</span> (
		<input class="percent-hp calc-trigger" value="100" />%)
		<br />
		<br />
		Health <div class="hpbar"></div>
	</div>
	<div hidden id="criticalHitInstruction">Force this attack to be a critical hit?</div>
	<div hidden id="zMoveInstruction">Make this attack a Z-move?</div>
	<div class="move1">
		<select class="move-selector calc-trigger small-select"></select>
		<input class="move-bp calc-trigger" value="50" />
		<select class="move-type calc-trigger"></select>
		<select class="move-cat calc-trigger gen-specific g4 g5 g6 g7">
			<option value="Physical">Physisch</option>
			<option value="Special">Speziell</option>
		</select>
		<input aria-describedby="criticalHitInstruction" class="move-crit calc-trigger visually-hidden" type="checkbox" id="critL1" />
		<label class="btn crit-btn" for="critL1" title="Force this attack to be a critical hit?">Crit</label>
		<input aria-describedby="zMoveInstruction" class="move-z calc-trigger visually-hidden" type="checkbox" id="zL1" />
		<label class="btn z-btn gen-specific" for="zL1" title="Make this attack a Z-move?">Z</label>
		<select class="move-hits calc-trigger hide">
			<option value="2">2 Treffer</option>
			<option value="3">3 Treffer</option>
			<option value="4">4 Treffer</option>
			<option value="5">5 Treffer</option>
		</select>
		<select class="stat-drops calc-trigger hide" title="How many times was this move used in a row?">
			>
			<option value="1">Ein mal</option>
			<option value="2">Zwei mal</option>
			<option value="3">3 mal</option>
			<option value="4">4 mal</option>
			<option value="5">5 mal</option>
		</select>
		<select class="metronome calc-trigger hide" title="How many times was this move used while holding Metronome?">
			<option value="1">Ein mal</option>
			<option value="2">Zwei mal</option>
			<option value="3">3 mal</option>
			<option value="4">4 mal</option>
			<option value="5">5 mal</option>
		</select>
	</div>
	<div class="move2">
		<select class="move-selector calc-trigger small-select"></select>
		<input class="move-bp calc-trigger" value="50" />
		<select class="move-type calc-trigger"></select>
		<select class="move-cat calc-trigger gen-specific g4 g5 g6 g7">
			<option value="Physical">Physisch</option>
			<option value="Special">Speziell</option>
		</select>
		<input aria-describedby="criticalHitInstruction" class="move-crit calc-trigger visually-hidden" type="checkbox" id="critL1" />
		<label class="btn crit-btn" for="critL1" title="Force this attack to be a critical hit?">Crit</label>
		<input aria-describedby="zMoveInstruction" class="move-z calc-trigger visually-hidden" type="checkbox" id="zL1" />
		<label class="btn z-btn gen-specific" for="zL1" title="Make this attack a Z-move?">Z</label>
		<select class="move-hits calc-trigger hide">
			<option value="2">2 Treffer</option>
			<option value="3">3 Treffer</option>
			<option value="4">4 Treffer</option>
			<option value="5">5 Treffer</option>
		</select>
		<select class="stat-drops calc-trigger hide" title="How many times was this move used in a row?">
			>
			<option value="1">Ein mal</option>
			<option value="2">Zwei mal</option>
			<option value="3">3 mal</option>
			<option value="4">4 mal</option>
			<option value="5">5 mal</option>
		</select>
		<select class="metronome calc-trigger hide" title="How many times was this move used while holding Metronome?">
			<option value="1">Ein mal</option>
			<option value="2">Zwei mal</option>
			<option value="3">3 mal</option>
			<option value="4">4 mal</option>
			<option value="5">5 mal</option>
		</select>
	</div>
	<div class="move3">
		<select class="move-selector calc-trigger small-select"></select>
		<input class="move-bp calc-trigger" value="50" />
		<select class="move-type calc-trigger"></select>
		<select class="move-cat calc-trigger gen-specific g4 g5 g6 g7">
			<option value="Physical">Physisch</option>
			<option value="Special">Speziell</option>
		</select>
		<input aria-describedby="criticalHitInstruction" class="move-crit calc-trigger visually-hidden" type="checkbox" id="critL1" />
		<label class="btn crit-btn" for="critL1" title="Force this attack to be a critical hit?">Crit</label>
		<input aria-describedby="zMoveInstruction" class="move-z calc-trigger visually-hidden" type="checkbox" id="zL1" />
		<label class="btn z-btn gen-specific" for="zL1" title="Make this attack a Z-move?">Z</label>
		<select class="move-hits calc-trigger hide">
			<option value="2">2 Treffer</option>
			<option value="3">3 Treffer</option>
			<option value="4">4 Treffer</option>
			<option value="5">5 Treffer</option>
		</select>
		<select class="stat-drops calc-trigger hide" title="How many times was this move used in a row?">
			>
			<option value="1">Ein mal</option>
			<option value="2">Zwei mal</option>
			<option value="3">3 mal</option>
			<option value="4">4 mal</option>
			<option value="5">5 mal</option>
		</select>
		<select class="metronome calc-trigger hide" title="How many times was this move used while holding Metronome?">
			<option value="1">Ein mal</option>
			<option value="2">Zwei mal</option>
			<option value="3">3 mal</option>
			<option value="4">4 mal</option>
			<option value="5">5 mal</option>
		</select>
	</div>
	<div class="move4">
		<select class="move-selector calc-trigger small-select"></select>
		<input class="move-bp calc-trigger" value="50" />
		<select class="move-type calc-trigger"></select>
		<select class="move-cat calc-trigger gen-specific g4 g5 g6 g7">
			<option value="Physical">Physisch</option>
			<option value="Special">Speziell</option>
		</select>
		<input aria-describedby="criticalHitInstruction" class="move-crit calc-trigger visually-hidden" type="checkbox" id="critL1" />
		<label class="btn crit-btn" for="critL1" title="Force this attack to be a critical hit?">Crit</label>
		<input aria-describedby="zMoveInstruction" class="move-z calc-trigger visually-hidden" type="checkbox" id="zL1" />
		<label class="btn z-btn gen-specific" for="zL1" title="Make this attack a Z-move?">Z</label>
		<select class="move-hits calc-trigger hide">
			<option value="2">2 Treffer</option>
			<option value="3">3 Treffer</option>
			<option value="4">4 Treffer</option>
			<option value="5">5 Treffer</option>
		</select>
		<select class="stat-drops calc-trigger hide" title="How many times was this move used in a row?">
			>
			<option value="1">Ein mal</option>
			<option value="2">Zwei mal</option>
			<option value="3">3 mal</option>
			<option value="4">4 mal</option>
			<option value="5">5 mal</option>
		</select>
		<select class="metronome calc-trigger hide" title="How many times was this move used while holding Metronome?">
			<option value="1">Ein mal</option>
			<option value="2">Zwei mal</option>
			<option value="3">3 mal</option>
			<option value="4">4 mal</option>
			<option value="5">5 mal</option>
		</select>
	</div>';
	
		if (!$is1v1)
		{
			echo '</div>
				</div>';
		}
	
		echo '</fieldset>';
	}


?>

