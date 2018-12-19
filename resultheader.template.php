<?php
	function printResultHeader($sideKey)
	{
		echo 
			'<div aria-labelledby="resultHeader'. $sideKey .'" class="move-result-subgroup" role="radiogroup">
				<div class="result-move-header">
					<span id="resultHeader'. $sideKey .'">Pok&eacute;mon 1\'s Attacken (Für ein genaueres Ergebnis, wähle eine Attacke aus)</span>
				</div>
				<div>
					<input class="result-move visually-hidden" type="radio" name="resultMove" id="resultMove'. $sideKey .'1" checked="checked" aria-describedby="resultDamage'. $sideKey .'1" />
					<label class="btn btn-xxxwide btn-top" for="resultMove'. $sideKey .'1">Hi Jump Kick</label>
					<span id="resultDamage'. $sideKey .'1">??? - ???%</span>
				</div>
				<div>
					<input class="result-move visually-hidden" type="radio" name="resultMove" id="resultMove'. $sideKey .'2" aria-describedby="resultDamage'. $sideKey .'2" />
					<label class="btn btn-xxxwide btn-mid" for="resultMove'. $sideKey .'2">Falcon Punch</label>
					<span id="resultDamage'. $sideKey .'2">??? - ???%</span>
				</div>
				<div>
					<input class="result-move visually-hidden" type="radio" name="resultMove" id="resultMove'. $sideKey .'3" aria-describedby="resultDamage'. $sideKey .'3" />
					<label class="btn btn-xxxwide btn-mid" for="resultMove'. $sideKey .'3">Suspicious Odor</label>
					<span id="resultDamage'. $sideKey .'3">??? - ???%</span>
				</div>
				<div>
					<input class="result-move visually-hidden" type="radio" name="resultMove" id="resultMove'. $sideKey .'4" aria-describedby="resultDamage'. $sideKey .'4" />
					<label class="btn btn-xxxwide btn-bottom" for="resultMove'. $sideKey .'4">Tombstoner</label>
					<span id="resultDamage'. $sideKey .'4">??? - ???%</span>
				</div>
			</div>';
	}
?>