<?php
	include './header.template.php';
	include './pokemon.template.php';
	include './fieldinfo.template.php';
	
	printDoctype();
?>

<body>

	<div class="header">
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
	</div>
		<div class="wrapper">
			<div>
				<span class="title-text">Pok&eacute;mon Schadensrechner</span>
				<span <!--title="Select the generation."-->>
					<input class="gen visually-hidden" type="radio" name="gen" value="7" id="gen7" checked="checked" /><label class="btn btn-xwide" for="gen7">Let´s GO P/E</label>
				</span>
				<span title="Select the calculator's mode of function.">
					<input class="mode visually-hidden" type="radio" name="mode" id="all-vs-one" /><label class="btn btn-wide btn-right right" for="all-vs-one">All vs One</label>
					<input class="mode visually-hidden" type="radio" name="mode" id="one-vs-all" /><label class="btn btn-wide btn-mid right" for="one-vs-all">One vs All</label>
					<input class="mode visually-hidden" type="radio" name="mode" id="one-vs-one" /><label class="btn btn-wide btn-left right" for="one-vs-one">One vs One</label>
				</span>
			</div>
			<hr />
			<div>
				<span class="title-text">Tier(s)/Format: </span>
				<span class="tiers" <!--title="Select the tier(s)/format."-->>
					<input class="visually-hidden" type="checkbox" name="tier" id="OU" /><label class="btn btn-wide btn-left" for="OU">OU (LV50)</label>
					<input class="visually-hidden" type="checkbox" name="tier" id="Uber" /><label class="btn btn-wide btn-right" for="Uber">Uber (LV100)</label>
				</span>
			</div>
		</div>
		<div class="panel-group" id="accordion">
			<?php 
				printPokemon(1, false); 
			
				printGoFieldInfo(false);
				
				printHiddenFieldInfo();
			?>
		</div>
		<div>
			<fieldset class="panel holder-0">
				<legend class="panel-heading panel-title">Ergebnisse</legend>
				<table class="hide display" id="holder-2">
					<thead>
						<tr>
							<th></th>
							<th>Beste Attacke</th>
							<th>Schaden (%)</th>
							<th>Schaden (px)</th>
							<th>KO Chance</th>
							<th>Typ 1</th>
							<th>Typ 2</th>
							<th>Fähigkeit</th>
							<th>Item</th>
						</tr>
					</thead>
				</table>
			</fieldset>
		</div>
		<script type="text/javascript">
			var linkExtension = '.php';
		</script>
		<!-- jquery.dataTables is incompatible with newer versions of jQuery -->
		<script type="text/javascript" src="./js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> <!-- to be replaced (probably) -->
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/colvis/1.1.1/js/dataTables.colVis.min.js"></script>
		<script type="text/javascript" src="./js/lodash.min.js?"></script>
		<script type="text/javascript" src="./select2/select2.min.js?"></script>
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
		<script type="text/javascript" src="./js/honkalculate_controls.js?"></script>
		<script type="text/javascript" src="./js/damage.js?"></script>
		<script type="text/javascript" src="./js/damage_dpp.js?"></script>
		<script type="text/javascript" src="./js/damage_rse.js?"></script>
		<script type="text/javascript" src="./js/damage_gsc.js?"></script>
		<script type="text/javascript" src="./js/damage_rby.js?"></script>
		<script type="text/javascript" src="./js/ko_chance.js?"></script>
		<div style="clear:both;padding:20px;text-align:left">
		<p>Created by Honko</p>
		<p>Translated and modified for Let´s GO by darkstormgames</p>
		<p><a href="https://github.com/Zarel/honko-damagecalc/contributors" target="_blank">Contributors</a></p>
		<p><a href="https://github.com/Zarel/honko-damagecalc" target="_blank">Original GitHub repository</a></p>
		<p><a href="./Datenschutz.php" target="_blank">Datenschutzerklärung</a> (weil´s leider sein muss)</p>
	</div>
</body>

</html>
