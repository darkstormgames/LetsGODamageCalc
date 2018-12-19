var ITEMS_GSC = [
];

var ITEMS_ADV = ITEMS_GSC.concat([
]);

ITEMS_ADV.splice(ITEMS_ADV.indexOf('Berry'), 1);
ITEMS_ADV.splice(ITEMS_ADV.indexOf('Gold Berry'), 1);
ITEMS_ADV.splice(ITEMS_ADV.indexOf('Pink Bow'), 1);
ITEMS_ADV.splice(ITEMS_ADV.indexOf('Polkadot Bow'), 1);

var ITEMS_DPP = ITEMS_ADV.concat([
]);

var ITEMS_BW = ITEMS_DPP.concat([
]);

var megaStones = {
};

var mega_Stones = Object.keys(megaStones);

var XY_items = mega_Stones.concat(['Assault Vest']).sort();

var ITEMS_XY = ITEMS_BW.concat(XY_items);

var ITEMS_SM = ITEMS_XY.concat([
]);

function getItemBoostType(item) {
	switch (item) {
	case 'Draco Plate':
	case 'Dragon Fang':
		return 'Dragon';
	case 'Dread Plate':
	case 'Black Glasses':
		return 'Dark';
	case 'Earth Plate':
	case 'Soft Sand':
		return 'Ground';
	case 'Fist Plate':
	case 'Black Belt':
		return 'Fighting';
	case 'Flame Plate':
	case 'Charcoal':
		return 'Fire';
	case 'Icicle Plate':
	case 'Never-Melt Ice':
		return 'Ice';
	case 'Insect Plate':
	case 'Silver Powder':
		return 'Bug';
	case 'Iron Plate':
	case 'Metal Coat':
		return 'Steel';
	case 'Meadow Plate':
	case 'Rose Incense':
	case 'Miracle Seed':
		return 'Grass';
	case 'Mind Plate':
	case 'Odd Incense':
	case 'Twisted Spoon':
		return 'Psychic';
	case 'Pixie Plate':
		return 'Fairy';
	case 'Sky Plate':
	case 'Sharp Beak':
		return 'Flying';
	case 'Splash Plate':
	case 'Sea Incense':
	case 'Wave Incense':
	case 'Mystic Water':
		return 'Water';
	case 'Spooky Plate':
	case 'Spell Tag':
		return 'Ghost';
	case 'Stone Plate':
	case 'Rock Incense':
	case 'Hard Stone':
		return 'Rock';
	case 'Toxic Plate':
	case 'Poison Barb':
		return 'Poison';
	case 'Zap Plate':
	case 'Magnet':
		return 'Electric';
	case 'Silk Scarf':
	case 'Pink Bow':
	case 'Polkadot Bow':
		return 'Normal';
	default:
		return '';
	}
}

function getBerryResistType(berry) {
	switch (berry) {
	case 'Chilan Berry':
		return 'Normal';
	case 'Occa Berry':
		return 'Fire';
	case 'Passho Berry':
		return 'Water';
	case 'Wacan Berry':
		return 'Electric';
	case 'Rindo Berry':
		return 'Grass';
	case 'Yache Berry':
		return 'Ice';
	case 'Chople Berry':
		return 'Fighting';
	case 'Kebia Berry':
		return 'Poison';
	case 'Shuca Berry':
		return 'Ground';
	case 'Coba Berry':
		return 'Flying';
	case 'Payapa Berry':
		return 'Psychic';
	case 'Tanga Berry':
		return 'Bug';
	case 'Charti Berry':
		return 'Rock';
	case 'Kasib Berry':
		return 'Ghost';
	case 'Haban Berry':
		return 'Dragon';
	case 'Colbur Berry':
		return 'Dark';
	case 'Babiri Berry':
		return 'Steel';
	case 'Roseli Berry':
		return 'Fairy';
	default:
		return '';
	}
}

function getFlingPower(item) {
	return item === 'Iron Ball' ? 130 :
		item === 'Hard Stone' ? 100 :
			item.indexOf('Plate') !== -1 || ['Deep Sea Tooth', 'Thick Club'].indexOf(item) !== -1 ? 90 :
				['Assault Vest', 'Weakness Policy'].indexOf(item) !== -1 ? 80 :
					['Poison Barb', 'Dragon Fang'].indexOf(item) !== -1 ? 70 :
						['Adamant Orb', 'Lustrous Orb', 'Macho Brace', 'Stick'].indexOf(item) !== -1 ? 60 :
							item === 'Sharp Beak' ? 50 :
								item === 'Eviolite' ? 40 :
									['Black Belt', 'Black Sludge', 'Black Glasses', 'Charcoal', 'Deep Sea Scale', 'Flame Orb', "King's Rock",
										'Life Orb', 'Light Ball', 'Magnet', 'Metal Coat', 'Miracle Seed', 'Mystic Water', 'Never-Melt Ice',
										'Razor Fang', 'Soul Dew', 'Spell Tag', 'Toxic Orb', 'Twisted Spoon'].indexOf(item) !== -1 ? 30 :
										item.indexOf('Berry') !== -1 ||
										['Air Balloon', 'Choice Band', 'Choice Scarf', 'Choice Specs', 'Destiny Knot', 'Electric Seed', 'Expert Belt', 'Focus Band',
											'Focus Sash', 'Grassy Seed', 'Lagging tail', 'leftovers', 'Mental Herb', 'Metal Powder', 'Misty Seed',
											'Muscle Band', 'Power Herb', 'Psychic Seed', 'Quick Powder', 'Reaper Cloth', 'Red Card', 'Ring Target',
											'Shed Shell', 'Silk Scarf', 'Silver Powder', 'Smooth Rock', 'Soft Sand', 'Soothe Bell', 'White Herb',
											'Wide Lens', 'Wise Glasses', 'Zoom Lens'].indexOf(item) !== -1 ? 10 :
											0;
}

function getNaturalGift(item) {
	var gift = {
		'Apicot Berry': {'t': 'Ground', 'p': 100},
		'Babiri Berry': {'t': 'Steel', 'p': 80},
		'Belue Berry': {'t': 'Electric', 'p': 100},
		'Charti Berry': {'t': 'Rock', 'p': 80},
		'Chesto Berry': {'t': 'Water', 'p': 80},
		'Chilan Berry': {'t': 'Normal', 'p': 80},
		'Chople Berry': {'t': 'Fighting', 'p': 80},
		'Coba Berry': {'t': 'Flying', 'p': 80},
		'Colbur Berry': {'t': 'Dark', 'p': 80},
		'Custap Berry': {'t': 'Ghost', 'p': 100},
		'Durin Berry': {'t': 'Water', 'p': 100},
		'Enigma Berry': {'t': 'Bug', 'p': 100},
		'Ganlon Berry': {'t': 'Ice', 'p': 100},
		'Haban Berry': {'t': 'Dragon', 'p': 80},
		'Jaboca Berry': {'t': 'Dragon', 'p': 100},
		'Kasib Berry': {'t': 'Ghost', 'p': 80},
		'Kebia Berry': {'t': 'Poison', 'p': 80},
		'Kee Berry': {'t': 'Fairy', 'p': 100},
		'Lansat Berry': {'t': 'Flying', 'p': 100},
		'Leppa Berry': {'t': 'Fighting', 'p': 80},
		'Liechi Berry': {'t': 'Grass', 'p': 100},
		'Lum Berry': {'t': 'Flying', 'p': 80},
		'Maranga Berry': {'t': 'Dark', 'p': 100},
		'Micle Berry': {'t': 'Rock', 'p': 100},
		'Occa Berry': {'t': 'Fire', 'p': 80},
		'Oran Berry': {'t': 'Poison', 'p': 80},
		'Passho Berry': {'t': 'Water', 'p': 80},
		'Payapa Berry': {'t': 'Psychic', 'p': 80},
		'Petaya Berry': {'t': 'Poison', 'p': 100},
		'Rawst Berry': {'t': 'Grass', 'p': 80},
		'Rindo Berry': {'t': 'Grass', 'p': 80},
		'Roseli Berry': {'t': 'Fairy', 'p': 80},
		'Rowap Berry': {'t': 'Dark', 'p': 100},
		'Salac Berry': {'t': 'Fighting', 'p': 100},
		'Shuca Berry': {'t': 'Ground', 'p': 80},
		'Sitrus Berry': {'t': 'Psychic', 'p': 80},
		'Starf Berry': {'t': 'Psychic', 'p': 100},
		'Tanga Berry': {'t': 'Bug', 'p': 80},
		'Wacan Berry': {'t': 'Electric', 'p': 80},
		'Watmel Berry': {'t': 'Fire', 'p': 100},
		'Yache Berry': {'t': 'Ice', 'p': 80}
	}[item];
	if (gift) {
		if (gen < 6) {
			gift.p -= 20;
		}
		return gift;
	}
	return {'t': 'Normal', 'p': 1};
}

function getTechnoBlast(item) {
	switch (item) {
	case 'Burn Drive':
		return 'Fire';
	case 'Chill Drive':
		return 'Ice';
	case 'Douse Drive':
		return 'Water';
	case 'Shock Drive':
		return 'Electric';
	default:
		return '';
	}
}

function getMultiAttack(item) {
	if (item.indexOf("Memory") !== -1) {
		return item.substring(0, item.indexOf(" "));
	}
	return '';
}

var seedBoostedStat = {
	'Electric Seed': DF,
	'Grassy Seed': DF,
	'Misty Seed': SD,
	'Psychic Seed': SD
};
