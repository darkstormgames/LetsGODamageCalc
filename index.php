<?php
	include './header.template.php';
	include './resultheader.template.php';
	include './pokemon.template.php';
	include './fieldinfo.template.php';
	
	printDoctype();
?>

<body>

<nav><div class="header">
	<!--<div class="header-inner">
		 <ul class="nav">
			  <li><a class="button nav-first" href="/"><img src="./pokemonshowdownbeta.png" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
			  <li><a class="button" href="/dex/">Pok&eacute;dex</a></li>
			  <li><a class="button" href="//replay.pokemonshowdown.com/">Replays</a></li>
			  <li><a class="button" href="/ladder/">Ladder</a></li>
			  <li><a class="button nav-last" href="/forums/">Forum</a></li>
		 </ul>
		 <ul class="nav nav-play">
			  <li><a class="button greenbutton nav-first nav-last" href="//play.pokemonshowdown.com/">Play</a></li>
		 </ul>
		 <div style="clear:both"></div>
	</div>-->
</div></nav>
	<div class="wrapper">
		<div aria-label="Settings" role="region">
			<span class="title-text">Pok&eacute;mon Schadensrechner</span>
			<span aria-labelledby="selectGenInstruction" role="radiogroup" title="Select the generation.">
				<span class="visually-hidden" id="selectGenInstruction">Generation:</span>
				<input class="gen visually-hidden" type="radio" name="gen" value="7" id="gen7" checked="checked" /><label class="btn btn-xwide btn-right" for="gen7">Let´s GO P/E</label>
			</span>
			<span aria-labelledby="selectNotationInstruction" role="radiogroup" title="Select the output notation." style="display: none;">
				<span class="visually-hidden" id="selectNotationInstruction">Select the output notation.</span>
				<!--<input class="notation visually-hidden" type="radio" name="notation" id="pixels" value="px" /><label class="btn btn-small btn-left" for="pixels">48th</label>-->
				<input class="notation visually-hidden" type="radio" name="notation" id="percentage" value="%" /><label class="btn btn-small btn-right" for="percentage">100%</label>
			</span>
			<span aria-labelledby="selectModeInstruction" role="radiogroup" title="Select the calculator's mode of function.">
				<span class="visually-hidden" id="selectModeInstruction">Modus</span>
				<input class="mode visually-hidden" type="radio" name="mode" id="all-vs-one" /><label class="btn btn-wide btn-right right" for="all-vs-one">All vs One</label>
				<input class="mode visually-hidden" type="radio" name="mode" id="one-vs-all" /><label class="btn btn-wide btn-mid right" for="one-vs-all">One vs All</label>
				<input class="mode visually-hidden" type="radio" name="mode" id="one-vs-one" checked="checked" /><label class="btn btn-wide btn-left right" for="one-vs-one">One vs One</label>
			</span>
		</div>
		<hr />
		
		<div aria-label="Move selection" class="move-result-group" role="region" title="Select a move to show detailed results.">
			<?php
				printResultHeader('L');
				printResultHeader('R');
			?>
		</div>
		
		<div aria-label="Calculation results" class="main-result-group" role="region">
			<div class="big-text">
				<span id="mainResult">Loading...</span>
			</div>
			<div class="small-text">
				<span id="damageValues">(If you see this message for more than a few seconds, try enabling JavaScript.)</span>
			</div>
		</div>
		
		<div aria-label="Pok&eacute;mon 1" class="panel" role="region">
			<?php 
				// pokemon.template.php
				printPokemon(1);
			?>
		</div>
		
		
		<div class="panel">
			<?php 
				// fieldinfo.template.php
				printGoFieldInfo();
				printHiddenFieldInfo();
			?>
		</div>
		
		
		<div aria-label="Pok&eacute;mon 2" role="region" class="panel">
			<?php 
				// pokemon.template.php
				printPokemon(2);
			?>
		</div>
		
	</div>
	<div style="clear:both;padding:20px;text-align:left">
		<p>Created by Honko</p>
		<p>Translated and modified for Let´s GO by darkstormgames</p>
		<p><a href="https://github.com/Zarel/honko-damagecalc/contributors" target="_blank">Contributors</a></p>
		<p><a href="https://github.com/Zarel/honko-damagecalc" target="_blank">Original GitHub repository</a></p>
		<p><a href="./Datenschutz.php" target="_blank">Datenschutzerklärung</a> (weil´s leider sein muss)</p>
	</div>
	
	<script type="text/javascript">
			var linkExtension = '.php';
		</script>
		<script type="text/javascript" src="./js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="./js/lodash.min.js"></script>
		<script type="text/javascript" src="./select2/select2.min.js"></script>
		<script type="text/javascript" src="./js/data/pokedex.js?"></script>
		<script type="text/javascript" src="./js/data/setdex_sm.js?"></script>
		<script type="text/javascript" src="./js/data/setdex_xy.js?"></script>
		<script type="text/javascript" src="./js/data/setdex_bw.js?"></script>
		<script type="text/javascript" src="./js/data/setdex_dpp.js?"></script>
		<script type="text/javascript" src="./js/data/setdex_rse.js?"></script>
		<script type="text/javascript" src="./js/data/setdex_gsc.js?"></script>
		<script type="text/javascript" src="./js/data/setdex_rby.js?"></script>
		<script type="text/javascript" src="./js/data/stat_data.js?"></script>
		<script type="text/javascript" src="./js/data/type_data.js?"></script>
		<script type="text/javascript" src="./js/data/nature_data.js?"></script>
		<script type="text/javascript" src="./js/data/ability_data.js?"></script>
		<script type="text/javascript" src="./js/data/item_data.js?"></script>
		<script type="text/javascript" src="./js/data/move_data.js?"></script>
		<script type="text/javascript" src="./js/shared_controls.js?"></script>
		<script type="text/javascript" src="./js/index_controls.js?"></script>
		<script type="text/javascript" src="./js/damage.js?"></script>
		<script type="text/javascript" src="./js/damage_dpp.js?"></script>
		<script type="text/javascript" src="./js/damage_rse.js?"></script>
		<script type="text/javascript" src="./js/damage_gsc.js?"></script>
		<script type="text/javascript" src="./js/damage_rby.js?"></script>
		<script type="text/javascript" src="./js/ko_chance.js?"></script>
		<script type="text/javascript" src="./js/moveset_import.js?"></script>
</body>

</html>
