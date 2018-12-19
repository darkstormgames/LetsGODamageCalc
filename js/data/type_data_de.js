var TYPE_CHART_RBY_DE = {
	None: {
		category: 'Physical',
		Normal: 1,
		Pflanze: 1,
		Feuer: 1,
		Wasser: 1,
		Elektro: 1,
		Eis: 1,
		Flug: 1,
		Käfer: 1,
		Gift: 1,
		Boden: 1,
		Gestein: 1,
		Kampf: 1,
		Psycho: 1,
		Geist: 1,
		Drache: 1
	},
	Normal: {
		category: 'Physical',
		None: 1,
		Normal: 1,
		Pflanze: 1,
		Feuer: 1,
		Wasser: 1,
		Elektro: 1,
		Eis: 1,
		Flug: 1,
		Käfer: 1,
		Gift: 1,
		Boden: 1,
		Gestein: 0.5,
		Kampf: 1,
		Psycho: 1,
		Geist: 0,
		Drache: 1
	},
	Pflanze: {
		category: 'Special',
		None: 1,
		Normal: 1,
		Pflanze: 0.5,
		Feuer: 0.5,
		Wasser: 2,
		Elektro: 1,
		Eis: 1,
		Flug: 0.5,
		Käfer: 0.5,
		Gift: 0.5,
		Boden: 2,
		Gestein: 2,
		Kampf: 1,
		Psycho: 1,
		Geist: 1,
		Drache: 0.5
	},
	Feuer: {
		category: 'Special',
		None: 1,
		Normal: 1,
		Pflanze: 2,
		Feuer: 0.5,
		Wasser: 0.5,
		Elektro: 1,
		Eis: 2,
		Flug: 1,
		Käfer: 2,
		Gift: 1,
		Boden: 1,
		Gestein: 0.5,
		Kampf: 1,
		Psycho: 1,
		Geist: 1,
		Drache: 0.5
	},
	Wasser: {
		category: 'Special',
		None: 1,
		Normal: 1,
		Pflanze: 0.5,
		Feuer: 2,
		Wasser: 0.5,
		Elektro: 1,
		Eis: 1,
		Flug: 1,
		Käfer: 1,
		Gift: 1,
		Boden: 2,
		Gestein: 2,
		Kampf: 1,
		Psycho: 1,
		Geist: 1,
		Drache: 0.5
	},
	Elektro: {
		category: 'Special',
		None: 1,
		Normal: 1,
		Pflanze: 0.5,
		Feuer: 1,
		Wasser: 2,
		Elektro: 0.5,
		Eis: 1,
		Flug: 2,
		Käfer: 1,
		Gift: 1,
		Boden: 0,
		Gestein: 1,
		Kampf: 1,
		Psycho: 1,
		Geist: 1,
		Drache: 0.5
	},
	Eis: {
		category: 'Special',
		None: 1,
		Normal: 1,
		Pflanze: 2,
		Feuer: 1,
		Wasser: 0.5,
		Elektro: 1,
		Eis: 0.5,
		Flug: 2,
		Käfer: 1,
		Gift: 1,
		Boden: 2,
		Gestein: 1,
		Kampf: 1,
		Psycho: 1,
		Geist: 1,
		Drache: 2
	},
	Flug: {
		category: 'Physical',
		None: 1,
		Normal: 1,
		Pflanze: 2,
		Feuer: 1,
		Wasser: 1,
		Elektro: 0.5,
		Eis: 1,
		Flug: 1,
		Käfer: 2,
		Gift: 1,
		Boden: 1,
		Gestein: 0.5,
		Kampf: 2,
		Psycho: 1,
		Geist: 1,
		Drache: 1
	},
	Käfer: {
		category: 'Physical',
		None: 1,
		Normal: 1,
		Pflanze: 2,
		Feuer: 0.5,
		Wasser: 1,
		Elektro: 1,
		Eis: 1,
		Flug: 0.5,
		Käfer: 1,
		Gift: 2,
		Boden: 1,
		Gestein: 1,
		Kampf: 0.5,
		Psycho: 2,
		Geist: 0.5,
		Drache: 1
	},
	Gift: {
		category: 'Physical',
		None: 1,
		Normal: 1,
		Pflanze: 2,
		Feuer: 1,
		Wasser: 1,
		Elektro: 1,
		Eis: 1,
		Flug: 1,
		Käfer: 2,
		Gift: 0.5,
		Boden: 0.5,
		Gestein: 0.5,
		Kampf: 1,
		Psycho: 1,
		Geist: 0.5,
		Drache: 1
	},
	Boden: {
		category: 'Physical',
		None: 1,
		Normal: 1,
		Pflanze: 0.5,
		Feuer: 2,
		Wasser: 1,
		Elektro: 2,
		Eis: 1,
		Flug: 0,
		Käfer: 0.5,
		Gift: 2,
		Boden: 1,
		Gestein: 2,
		Kampf: 1,
		Psycho: 1,
		Geist: 1,
		Drache: 1
	},
	Gestein: {
		category: 'Physical',
		None: 1,
		Normal: 1,
		Pflanze: 1,
		Feuer: 2,
		Wasser: 1,
		Elektro: 1,
		Eis: 2,
		Flug: 2,
		Käfer: 2,
		Gift: 1,
		Boden: 0.5,
		Gestein: 1,
		Kampf: 0.5,
		Psycho: 1,
		Geist: 1,
		Drache: 1
	},
	Kampf: {
		category: 'Physical',
		None: 1,
		Normal: 2,
		Pflanze: 1,
		Feuer: 1,
		Wasser: 1,
		Elektro: 1,
		Eis: 2,
		Flug: 0.5,
		Käfer: 0.5,
		Gift: 0.5,
		Boden: 1,
		Gestein: 2,
		Kampf: 1,
		Psycho: 0.5,
		Geist: 0,
		Drache: 1
	},
	Psycho: {
		category: 'Special',
		None: 1,
		Normal: 1,
		Pflanze: 1,
		Feuer: 1,
		Wasser: 1,
		Elektro: 1,
		Eis: 1,
		Flug: 1,
		Käfer: 1,
		Gift: 2,
		Boden: 1,
		Gestein: 1,
		Kampf: 2,
		Psycho: 0.5,
		Geist: 1,
		Drache: 1
	},
	Geist: {
		category: 'Physical',
		None: 1,
		Normal: 0,
		Pflanze: 1,
		Feuer: 1,
		Wasser: 1,
		Elektro: 1,
		Eis: 1,
		Flug: 1,
		Käfer: 1,
		Gift: 1,
		Boden: 1,
		Gestein: 1,
		Kampf: 1,
		Psycho: 0,
		Geist: 2,
		Drache: 1
	},
	Drache: {
		category: 'Special',
		None: 1,
		Normal: 1,
		Pflanze: 1,
		Feuer: 1,
		Wasser: 1,
		Elektro: 1,
		Eis: 1,
		Flug: 1,
		Käfer: 1,
		Gift: 1,
		Boden: 1,
		Gestein: 1,
		Kampf: 1,
		Psycho: 1,
		Geist: 1,
		Drache: 2
	}
};

var TYPE_CHART_GSC_DE = $.extend(true, {}, TYPE_CHART_RBY, {
	None: {
		Unlicht: 1,
		Stahl: 1
	},
	Normal: {
		Unlicht: 1,
		Stahl: 0.5
	},
	Pflanze: {
		Unlicht: 1,
		Stahl: 0.5
	},
	Feuer: {
		Unlicht: 1,
		Stahl: 2
	},
	Wasser: {
		Unlicht: 1,
		Stahl: 1
	},
	Elektro: {
		Unlicht: 1,
		Stahl: 1
	},
	Eis: {
		Feuer: 0.5,
		Unlicht: 1,
		Stahl: 0.5
	},
	Flug: {
		Unlicht: 1,
		Stahl: 0.5
	},
	Käfer: {
		Gift: 0.5,
		Unlicht: 2,
		Stahl: 0.5
	},
	Gift: {
		Käfer: 1,
		Unlicht: 1,
		Stahl: 0
	},
	Boden: {
		Unlicht: 1,
		Stahl: 2
	},
	Gestein: {
		Unlicht: 1,
		Stahl: 0.5
	},
	Kampf: {
		Unlicht: 2,
		Stahl: 2
	},
	Psycho: {
		Unlicht: 0,
		Stahl: 0.5
	},
	Geist: {
		Psycho: 2,
		Unlicht: 0.5,
		Stahl: 0.5
	},
	Drache: {
		Unlicht: 1,
		Stahl: 0.5
	},
	Unlicht: {
		category: 'Special',
		None: 1,
		Normal: 1,
		Pflanze: 1,
		Feuer: 1,
		Wasser: 1,
		Elektro: 1,
		Eis: 1,
		Flug: 1,
		Käfer: 1,
		Gift: 1,
		Boden: 1,
		Gestein: 1,
		Kampf: 0.5,
		Psycho: 2,
		Geist: 2,
		Drache: 1,
		Unlicht: 0.5,
		Stahl: 0.5
	},
	Stahl: {
		category: 'Physical',
		None: 1,
		Normal: 1,
		Pflanze: 1,
		Feuer: 0.5,
		Wasser: 0.5,
		Elektro: 0.5,
		Eis: 2,
		Flug: 1,
		Käfer: 1,
		Gift: 1,
		Boden: 1,
		Gestein: 2,
		Kampf: 1,
		Psycho: 1,
		Geist: 1,
		Drache: 1,
		Unlicht: 1,
		Stahl: 0.5
	}
});

var TYPE_CHART_XY_DE = $.extend(true, {}, TYPE_CHART_GSC, {
	None: {
		Fee: 1
	},
	Normal: {
		Fee: 1
	},
	Pflanze: {
		Fee: 1
	},
	Feuer: {
		Fee: 1
	},
	Wasser: {
		Fee: 1
	},
	Elektro: {
		Fee: 1
	},
	Eis: {
		Fee: 1
	},
	Flug: {
		Fee: 1
	},
	Käfer: {
		Fee: 0.5
	},
	Gift: {
		Fee: 2
	},
	Boden: {
		Fee: 1
	},
	Gestein: {
		Fee: 1
	},
	Kampf: {
		Fee: 0.5
	},
	Psycho: {
		Fee: 1
	},
	Geist: {
		Stahl: 1,
		Fee: 1
	},
	Drache: {
		Fee: 0
	},
	Unlicht: {
		Stahl: 1,
		Fee: 0.5
	},
	Stahl: {
		Fee: 2
	},
	Fee: {
		None: 1,
		Normal: 1,
		Pflanze: 1,
		Feuer: 0.5,
		Wasser: 1,
		Elektro: 1,
		Eis: 1,
		Flug: 1,
		Käfer: 1,
		Gift: 0.5,
		Boden: 1,
		Gestein: 1,
		Kampf: 2,
		Psycho: 1,
		Geist: 1,
		Drache: 2,
		Unlicht: 2,
		Stahl: 0.5,
		Fee: 1
	}
});
