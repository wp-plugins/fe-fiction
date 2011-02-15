<?php

$option_name = 'fe_fiction_loaded';
$custom_post_type = 'fiction';
$fe_fiction_wp_options = array('custom_dashboard'=>'fe-fiction-custom_dashboard','hide_admin_menus'=>'fe-fiction-hide_admin_menus');

$custom_post_type_args = array(
		'labels' => Array
			(
				'name' => 'Fiction'
				,'singular_name' => 'Fiction'
				,'add_new' => 'Add New'
				,'add_new_item' => 'Create Story'
				,'edit_item' => 'Edit Story'
				,'new_item' => 'Create Story'
				,'view_item' => 'View Story'
				,'search_items' => 'Search Stories'
				,'not_found' => 'No stories found'
				,'not_found_in_trash' => 'No stories found in trash'
				,'parent_item_colon' => 'Parent Story'
			)

		,'supports' => Array
			(
				'title' => 'title'
				,'editor' => 'editor'
				,'author' => 'author'
				,'excerpt' => 'excerpt'
				,'comments' => 'comments'
				,'revisions' => 'revisions'
				,'page_attributes' => 'page-attributes'
			)

		,'capability_type' => 'post'
		,'description' => ''
		,'menu_position' => 5
		,'public' => (bool) 1
		,'hierarchical' => (bool) 0
		,'rewrite' => (bool) 1
		,'query_var' => (bool) 1
		,'can_export' => (bool) 1
	);

$fic_post_custom_fields_prefix = '_fefic_';

$fic_post_custom_fields = array(
	'copyright' => array
	(
		'field_title' => 'Copyright'
		,'field_type' => 'text'
		,'field_sort_order' => 'default'
		,'field_default_option' => ''
		,'field_description' => 'Copyright information (such as: (c) 2004, John Doe)'
		,'object_type' => array('0' => 'fiction')
		,'field_id' => 'copyright'
	)
	,'disclaimer' => array
	(
		'field_title' => 'Disclaimer'
		,'field_type' => 'textarea'
		,'field_sort_order' => 'default'
		,'field_default_option' => ''
		,'field_description' => 'If there are any disclaimers you need to state, do so here.'
		,'object_type' => array('0' => 'fiction')
		,'field_id' => 'disclaimer'
	)
);

$taxonomies = array(
		'genre' => Array
			(
				'object_type' => Array ('fiction')
				,'args' => Array (
					'labels' => Array 
					(
						'name' => 'Genres'
						,'singular_name' => 'Genre'
						,'add_new_item' => 'Add New Genre'
						,'new_item_name' => 'New Genre Name'
						,'edit_item' => 'Edit Genre'
						,'update_item' => 'Update Genre'
						,'search_items' => 'Search Genres'
						,'popular_items' => 'Popular Genres'
						,'all_items' => 'All Genres'
						,'parent_item' => 'Parent Genre'
						,'parent_item_colon' => 'Parent Genre:'
						,'add_or_remove_items' => 'Add or remove genres'
						,'separate_items_with_commas' => 'Separate genres with commas'
						,'choose_from_most_used' => 'All Genres'
					)
					,'show_ui' => (bool) 1
					,'show_tagcloud' => (bool) 1
					,'show_in_nav_menus' => (bool) 1
					,'hierarchical' => (bool) 1
					,'rewrite' => (bool) 1
					,'query_var' => (bool) 1
				)
				,'terms' => array
				(
					'Action / Adventure' => array(
						//'description' => 'Action / Adventure'
						//,'slug' => 'action-adventure'
					)
					,'Angst' => array(
						//'description' => 'Angst'
						//,'slug' => 'angst'
					)
					,'Drama' => array(
						//'description' => 'Drama'
						//,'slug' => 'drama'
					)
					,'Fantasy' => array(
						//'description' => 'Fantasy'
						//,'slug' => 'fantasy'
					)
					,'General' => array(
						//'description' => 'General'
						//,'slug' => 'general'
					)
					,'Horror' => array(
						//'description' => 'Horror'
						//,'slug' => 'horror'
					)
					,'Humor' => array(
						//'description' => 'Humor'
						//,'slug' => 'humor'
					)
					,'Mystery' => array(
						//'description' => 'Mystery'
						//,'slug' => 'mystery'
					)
					,'Parody' => array(
						//'description' => 'Parody'
						//,'slug' => 'parody'
					)
					,'Poetry' => array(
						//'description' => 'Poetry'
						//,'slug' => 'poetry'
					)
					,'Romance' => array(
						//'description' => 'Romance'
						//,'slug' => 'romance'
					)
					,'Sci-Fi' => array(
						//'description' => 'Sci-Fi'
						//,'slug' => 'sci-fi'
					)
					,'Slash' => array(
						//'description' => 'Slash'
						//,'slug' => 'slash'
					)
					,'Spiritual' => array(
						//'description' => 'Spiritual'
						//,'slug' => 'spiritual'
					)
					,'Supernatural' => array(
						//'description' => 'Supernatural'
						//,'slug' => 'supernatural'
					)
					,'Suspense' => array(
						//'description' => 'Suspense'
						//,'slug' => 'suspense'
					)
					,'Tragedy' => array(
						//'description' => 'Tragedy'
						//,'slug' => 'tragedy'
					)
				)
			)
		,'story_category' => Array
			(
				'object_type' => Array ('fiction')
				,'args' => Array (
					'labels' => Array
					(
						'name' => 'Categories'
						,'singular_name' => 'Category'
						,'add_new_item' => 'Add New Category'
						,'new_item_name' => 'New Category Name'
						,'edit_item' => 'Edit Category'
						,'update_item' => 'Update Category'
						,'search_items' => 'Search Categories'
						,'popular_items' => 'Popular Categories'
						,'all_items' => 'All Categories'
						,'parent_item' => 'Parent Category'
						,'parent_item_colon' => 'Parent Category:'
						,'add_or_remove_items' => 'Add or remove categories'
						,'separate_items_with_commas' => 'Separate categories with commas'
						,'choose_from_most_used' => 'All Categories'
					)
					,'show_ui' => (bool) 1
					,'show_tagcloud' => (bool) 1
					,'show_in_nav_menus' => (bool) 1
					,'hierarchical' => (bool) 1
					,'rewrite' => (bool) 1
					,'query_var' => (bool) 1
				)
			)
		,'rating' => Array (
				'object_type' => Array ('fiction')
				,'args' => Array (
					'labels' => Array
					(
						'name' => 'Ratings'
						,'singular_name' => 'Rating'
						,'add_new_item' => 'Add New Rating'
						,'new_item_name' => 'New Rating Name'
						,'edit_item' => 'Edit Rating'
						,'update_item' => 'Update Rating'
						,'search_items' => 'Search Ratings'
						,'popular_items' => 'Popular Ratings'
						,'all_items' => 'All Ratings'
						,'parent_item' => 'Parent Rating'
						,'parent_item_colon' => 'Parent Rating:'
						,'add_or_remove_items' => 'Add or remove ratings'
						,'separate_items_with_commas' => 'Separate ratings with commas'
						,'choose_from_most_used' => 'All Ratings'
					)
					,'public' => (bool) 1
					,'hierarchical' => (bool) 1
					,'rewrite' => (bool) 1
					,'query_var' => (bool) 1
				)
				,'terms' => Array
				(
					'G' => Array (
						//'description'=> 'Rated G'
						//,'slug' => 'G'
					)
					,'PG' => Array (
						//'description'=> 'Rated PG'
						//,'slug' => 'PG'
					)
					,'PG-13' => Array (
						//'description'=> 'Rated PG-13'
						//,'slug' => 'PG-13'
					)
					,'R' => Array (
						//'description'=> 'Rated R'
						//,'slug' => 'R'
					)
					,'NC-17' => Array (
						//'description'=> 'Rated NC-17'
						//,'slug' => 'NC-17'
					)
				)
			)
		);

$taxonomies_story_category_terms = array(
		'taxonomy' => 'story_category'
		,'terms' => array(
			'Movies' => array(
				'10 Things I Hate About You','10,000 Years BC','13 Ghosts','13th Warrior','27 Dresses','28 Days Later','300','39 Clues','50 First Dates','5ive Girls','A Bugs Life','A Christmas Wish','A Cinderella Story','A Knight\'s Tale','A Little Princess','A Man Apart','A Nightmare on Elm Street','A Walk to Remember','A.I.','Accepted','Aladdin','Alexander','Alien Nation','Aliens/Predator','Almost Famous','Amelie','American Beauty','American Outlaws','American Pie','American President','American Psycho','Anastasia','And Then Came Lola','Annie','Apocalypse Now','Armageddon','August Rush','Austin Powers','awake','Back to the Future','Balto','Band of Brothers','Bandidas','Batman','Batman Begins','Battle Royale','Beautiful Girls','Beauty and the Beast','Behind Enemy Lines','Bend it Like Beckham','Blade','Blade Runner','Blair Witch Project','Blow','Blues Brothers','Bollywood','Boondock Saints','Bourne Identity/Supremacy','Boys and Girls','Braveheart','Breakfast at Tiffany\'s','Breakfast Club','Breaking Dawn','Bride and Prejudice','Bridget Jone\'s Diary','Bring it On','Bring It On All or Nothing','Brokeback Mountain','Brotherhood of the Wolf','Brothers Grim','Buckaroo Banzai','Butterfly Effect','Cannonball Run','Cars','Casablanca','Casanova','Casper','Cast Away','Castle','Center Stage','Charade','Charlie and the Chocolate Factory','Charlie\'s Angels: The Movie','Cheaper by the Dozen','Chicago!','Chicken Little','Chicken Run','Child\'s Play','Children of the Corn','Chocolat','Chronicles of Narnia','Claire of the Moon','Clockwork Orange','Cold Mountain','Collateral','Constant Gardener','Constantine','Corpse Bride','Coyote Ugly','Craft','Crouching Tiger, Hidden Dragon','Crow','Cruel Intentions','Cry Wolf','Cube','Cursed','D.E.B.S','Dangerous Liaisons','Dark Crystal','Darkman','Darling Lili','Dawn of the Dead','Day After Tomorrow','Dead Man On Campus','Dead Poets Society','Dear Frankie','Deer Hunter','Demolition Man','Desert Hearts','Desperado','Die Hard','Dirty Dancing','Disturbing Behavior','Divine Secrets of the YYS','Dogma','Domino','Donnie Darko','Dracula','Dragon Heart','Dressed To Kill','Drive Me Crazy','Eclipse','Edward Scissorhands','Elektra','Elizabethtown','Equilibrium','Escape from NY/LA','Ever After','Evil Dead/Army of Darkness','Faculty','Fantastic 4','Fast and the Furious','FEAR','Fifth Element','Fight Club','Final Destination','Final Fantasy: Spirits Within','Finding Nemo ','Finding Neverland','Forbidden Warrior','Four Brothers','Fright Night','From Dusk Till Dawn','From Hell','Gamera','Gangs of New York','Gattaca','Get Real','Ghost Ship','Gia','Ginger Snaps','Girl','Girl Next Door','Gladiator','Godfather','Godzilla','Gone In 60 Seconds','Gone With The Wind','Good Will Hunting','Goonies','Gossip','Grease','Great Mouse Detective','Gremlins','Hackers','Hairspray','Halloween','Hannah Free','Hannibal','Hard Core Logo','Harry Potter','Heathers','Hedwig and the Angry inch','Hellboy','Hellraiser','Here On Earth','Hidalgo','High School Musical','Hocus Pocus','Holes','Honey I shrunk the kids','House of 1000 Corpses/Devil\'s Rejects','House of Flying Daggers','House of Wax','House on Haunted Hill','I Can\'t Think Straight','I Know What You Did Last Summer','Ice Age','Identity','Imagine Me &amp; You','Imagine Me and You','Immortality','Incredibles','Interpreter','Inuyasha ','Island','IT','Itty Bitty Titty Committee','James Bond','Jarhead','Jeepers Creepers','Joseph: King of Dreams','Joshua Tree','Jurassic Park','Just My Luck','Kate and Leopold','Kevin Smith','Kill Bill','King Arthur','King Kong','Kingdom of Heaven','Kiss of the Dragon','Knockaround Guys','Krull','Kung Fu Panda','Labyrinth','Lake House','Lara Croft: Tomb Raider','Last of the Mohicans','Last Samurai','Last Unicorn','Lawrence of Arabia','Legend','Les Filles Du Botaniste','Lethal Weapon','Life is Beautiful','Lion King','Little Giants','Lock, Stock and Two Smoking Barrels','Longest Yard','Lord of the Rings','Lords of Dogtown','Lost Boys','Love Actually','Loving Annabelle','LXG','Mad Max','Madagascar','Magnificent Seven','Marx Brothers','Mary Poppins','Master and Commander','Matrix','Mean Girls','Memento','Men In Black','Mighty','Mighty Ducks','Minority Report','Miscellaneous Movies','Miss Congeniality','Mission: Impossible','Mists of Avalon','Monsters Inc.','Monty Python','Moon Child','Motocrossed','Moulin Rouge','Mr. & Mrs. Smith','Mulan','Mummy','Murder by Numbers','My Girl','My Own Private Idaho','Napoleon Dynamite','National Treasure','Ned Kelly','Nerverending Story','Net','Never Been Kissed','New Moon','Newsies','Night At The Museum','Nightmare Before Christmas','Notebook','Notting Hill','Now and Then','Now You See It. . .','Ocean\'s 11','Once Upon a Time in Mexico','One Special Night','Open Range','Osmosis Jones','Other Voices','Out of Sight','Over the Hedge','Pacifier','Panic Room','Patriot','Pearl Harbor','Personal Best','Peter Pan','Philadelphia','Phone Booth','Pirates of the Caribbean','Pirates of the Penzance','Pitch Black / Riddick','Planet of the Apes','Pretty Woman','Pride &amp; Prejudice','Prince of Egypt','Princess Bride','Princess Diaries','Princess Of Thieves','Professional','Proof of Life','Pump Up The Volume','Quills','Raiders of the Lost Ark','Raise Your Voice','Raising Helen','Rambo','Ravenous','Re-Animator','Real Genius','Rebecca','Rebel Without A Cause','Red Eye','Reign Of Fire','Remember the Titans','Rent','Replacement Killers','Replacements','Repo! The genetic opera','Reservoir Dogs','Ring/Ringu','Road to Eldorado','Rob Roy','Robocop','Rock-a-Doodle','Rocky','Rocky Horror','Romeo Must Die','Rookie','Rush Hour','Sandlot','Santa Clause','Save the Last Dance','Saving Private Ryan','Saw','Scarface','Scent of a woman','Schindler\'s List','School of Rock','Scream','Screamers','Se7en','Secret Window','Serenity','Seven','Shadow','Shakespeare in Love','Shanghai Noon','Shaolin Brothers and Sisters','Shark Tale','Shaun of the Dead','She\'s the Man','Shrek','Signs','Silence of the Lambs','Skulls','Sky Captain and the World of Tomorrow','Sky High','Snatch','Some Like It Hot','Someone Like You','Somewhere in Time','Sound of Music','Spaceballs','Spider-man','Spirit','Spy Kids','Stand By Me','Star Trek','Star Wars','Starship Troopers','Step Up 2','Stiff Upper Lips','Stigmata','Superman','Superman II','Superman III','Superman IV','Superman Returns','SWAT','Sweeny Todd','Sweet Home Alabama','Sweet November','Swing Kids','Swordfish','Sylvia Scarlett','Talented Mr Ripley','Teen Wolf','Tekkonkinkreet','Terminator','Texas Chainsaw Massacre','The Covenant','The Crying Game','The Da Vinci Code','The Dark Knight','The Gods Must Be Crazy','The Gymnast','The history boys','The Incredibly True Adventures of Two Girls in Love','The Karate UnDead 2 (Zombie Bob)','The Little Mermaid','The Little Vampire','The Magic Pony','The other boleyn girl','The Phantom of the Opera','The Thing','The World Unseen','Three Ninja\'s','Thumbelina','Timecop','Titan A.E.','Titanic','Tombstone','Top Gun','Tower of Terror','Toy Story','Trainspotting','Transformers','Transporter','Tron','Troy','Truman Show','Twilight','Underworld','Unleashed','V for Vendetta','Valentine','Van Helsing','Velvet Goldmine','Village','Virgin Suicides','Wallace and Gromit','Wanted','Watchmen','West Side Story','What A Girl Wants','When KIRAN Met KAREN','Wicker Man','Wild Wild West','Willard','Wimbledon','Wizard of Oz','X-Men: The Movie','xXx','You\'ve Got Mail','Young Guns','Yours, Mine, and Ours','Zenon'
			)
			,'Television' => array(
				'10th Kingdom','15Love','21 Jump Street','24','3rd Rock from the Sun','4400','7th Heaven','8 Simple Rules','A-Team','Absolutely Fabulous','Ace Lightning','Adam-12','Adventure Inc.','Adventures of Shirley Holmes','Adventures of Sinbad','Affinity','Agency','Airwolf','Alf','Alias','Alias Smith & Jones','Aliens In America','All Creatures Great and Small','All In The Family','All My Children','All Saints','Allo Allo!','Ally McBeal','Amanda Show','American Dreams','American Gothic','Andromeda','Andy Griffith Show','Angel','anime','Another World','Anyone But Me','Are You Afraid of the Dark','Arrested Development','Arthur','As the World Turns','Avatar the last Airbender','Avengers','Babylon 5','Bad Girls','Ballykissangel','Barney Miller','Battlestar Galactica','Battlestar Galactica: 2003','Baywatch','Bear In The Big Blue House','Beastmaster','Beauty and the Beast','Beverly Hills 90210','Bewitched','Big Brother','Big Shots','Big Time Rush','Big Valley','Big Wolf on Campus','Bill','Bill Nye The Science Guy!','Bionic Woman','Birds Of Prey','Black Books','Blackadder','Blakes 7','Blind Justice','Blood Ties','Blue Heelers','Bold and the Beautiful','Bonanza','Bones','Boomtown','Boston Legal','Boston Public','Boy Meets World','Brady Bunch','Brimstone','britannia high','British Comedy','Brothers &amp; Sisters','Buck Rogers','Buffy: The Vampire Slayer','Burning Zone','Cagney and Lacey','Caitlin\'s Way','Californication','Cane','Captain N','Captain Power','Captain Scarlet','Carnivale','Caroline In The City','Cashmere Mafia','Castle','Casualty','Centennial','Champions','Charlie\'s Angels','Charmed','Cheers','Chicago Hope','China Beach','CHIPs','Christy','Chronicle','Chuck','Clarissa Explains It All','Cleopatra 2525','Close to Home','Closer','Cold Case','Combat!','Commander in Chief','Complete Savages','Conviction','Cosby Show','Cover Me','Covington Cross','Cowboy bebop','Criminal Minds','Crossing Jordan','Crusade','CSI','CSI: Miami','CSI: New York','Cupid','D.gray-man','Da Vinci\'s Inquest','Dallas','Damages','Daniel Boone','Danny Phantom','Dark Angel','Dark Oracle','Dark Shadows','Dawson\'s Creek','Days of Our Lives','Dead Like Me','Dead Zone','Deadwood','Death Note','Degrassi','Desperate Housewives','Dexter','Dharma & Greg','Diagnosis Murder','Diff\'rent Strokes','Dirty Sexy Money','District','Division','Doc','Doctor Who','Dollhouse','Doogie Howser, M.D.','Dr. Quinn Medicine Woman','Dracula','Dragnet','Drake & Josh','Drew Carey Show','Due South','Dukes of Hazzard','E-Ring','Early Edition','Earth 2','Earth: Final Conflict','Ed','Emergency','Emily of New Moon','Equalizer','ER','Even Stevens','Everwood','Everybody Loves Raymond','Exs &amp; Ohs','Extreme Ghostbusters','F Troop','Facts of Life','Falcon Crest','family guy','Family Law','Family Matters','Family Ties','Famous Jett Jackson','Fantasy Island','Farscape','Fastlane','Felicity','Firefly','First Wave','Flash','Flash Forward','Flash Gordon','Flight 29 Down','Flying Nun','For the People','Forever Knight','Fraggle Rock','Frasier','Freaks and Geeks','Freaky Links','Fresh Prince of Bel Air','Friday Night Lights','Friday the 13th','Friends','Fringe','Full House','Full-Metal Alchemist','FX: The Series','Galidor','Garrison\'s Gorillas','General Hospital','Get Smart','Ghost and Mrs. Muir','Ghost whisperer','Gilligan\'s Island','Gilmore Girls','Girlfriends','Glee','gLeeks United','Glory Days','Golden Girls','Good Burger','Good Morning Miami','Gossip Girl','Greatest American Hero','Green Acres','Green Hornet','Grey\'s Anatomy','Grid','Growing Pains','Guardian','Guiding Light','Gunsmoke','H2O','Handler','Hannah Montana','Happy Days','Hardcastle and McCormick','Harry Potter','Harsh Realm','Hawaii','Hawaii Five-0','Hercules','Heroes','Hex','High Mountain Rangers','Higher Ground','Highlander','Hogan\'s Heroes','Hollyoaks','Home & Away','Home Improvement','Homefront','Homicide:Life on the Streets','Horatio Hornblower','House, M.D.','Houston Knights','How i met your mother','Hunter','Huntress','Hustle','I Dream of Jeannie','I Love Lucy','I Spy','iCarly','Imagination Movers','Immortal','In A Heartbeat','In Plain Sight','In the heat of the night','Incredible Hulk','Inside','Instant Star','Inuyasha','Invader Zim','Invasion','Invisible Man','Jack & Bobby','Jack of All Trades','JAG','Jake 2.0','Jeremiah','Jericho','Joan Of Arcadia','Joe Hollywood','Joey','John Doe','Journeyman','Judging Amy','Just Shoot Me','Keen Eddie','Kidnapped','Kids In The Hall','Kindred: The Embraced','Kingdom Hospital','Kissing You - A Supernatural Tribute to Jimmy Novak and his family','Knight Rider','Knightmare','Kolchak: The Night Stalker','Kung Fu: The Legend Continues','Kyle XY','L.A Heat','L.A. Law','La Femme Nikita','Labrynth','Laguna Beach','Lancer','Laramie','Largo Winch','Las Vegas','Laverne and Shirley','Law and Order','Law and Order: CI','Law and Order: SVU','Law and Order: TBJ','Lazytown','Legacy','Legend of the Seeker','Level 9','Lexx','Liberty\'s Kids','Life','Life As We Know It','Life With Derek','Line of Fire','Lip Service','Little Britain','Little Men','Living Single','Lizzie McGuire','Lois and Clark','London\'s Burning','Lone Gunmen','Lonesome Dove','Los Luchadores','Lost','Lost In Space','Lost World','Love Island','Lyon\'s Den','M*A*S*H','MacGyver','Magnificent Seven','MAGNUM P.I.','Malcolm in the Middle','Man From UNCLE','Man in a Suitcase','Mannix','Martial Law','Max Headroom','McLeods Daughters','Medical Investigation','Medium','Melrose Place','Merlin','MI-5/Spooks','Miami Vice','Mighty Boosh','Mighty Ducks The Animated Series','Miracles','Misc. Tv Shows','Misfits of Science','MISSING','Mission Genesis','Mission Impossible','Mistresses','Monarch of the Glen','Monk','Moolah Beach','Moonlight','Moonlighting','Muppets Tonight','Murder Call','Murder She Wrote','Murphy Brown','Mutant X','My Family','My Name is Earl','My So Called Life','My Two Dads','Mysterious Ways','Mystery Men','Mystic Knights','Nanny','Nanny and the Professor','Naruto','naruto vs sasuke','Nascar','Nash Bridges','NCIS','Ned\'s Declassified SSG','Neighbours','New York Undercover','News Radio','Nip/Tuck','North and South','North Shore','Northern Exposure','Now and Again','Numb3rs','NYPD Blue','O.C.','Ocean Girl','Odd Couple','Odyssey','Odyssey 5','Office','Once and Again','One Life To Live','One Tree Hill','Ouran High School Host Club','Outer Limits','Over There','OZ','Pacific Blue','Partridge Family','Party Of Five','Passions','Peacemakers','Perfect Strangers','Perry Mason','Phil Of The Future','Philly','Picket Fences','Pinks','Players','Point Pleasant','Poltergeist: the Legacy','Ponderosa','Popular','Port Charles','Power Rangers','Practice','Presidio Med','Press Gang','Pretender','Pretty Little Liars','Prey','Prison Break','Private Practice','Professionals','Profiler','Providence','Psi Factor','Punky Brewster','Pushing Daisies','Quantum Leap','Queen of Swords','Queer as Folk','Radio Free Roscoe','Randall & Hopkirk','Rat Patrol','Raven','Rawhide','Reaper','Reba','Rebelde','Red Cap','Red Dwarf','Related','Relic Hunter','Remember WENN','Remington Steele','Renegade','Rescue 77','Rescue Me','Resurrection Blvd.','Reunion','Riptide','Rizzoli &amp; Isles','Road to Avonlea','Roar','Robin Hood','Robin of Sherwood','Rockford Files','Rome','Rookies','Roswell','Round The Twist','Royal','Sabrina the Teenage Witch','Safe Harbor','Sailor Moon','Sanctuary','Saturday Night Live','Saved','Saved By The Bell','Scarecrow and Mrs. King','Scrubs','SeaQuest','Secret Adventures of Jules Verne','Secret World of Alex Mack','Seinfeld','Sentinel','Sesame Street','Seven Days','Sex and the City','She Spies','Shield','Silk Stalkings','Simon and Simon','Six Feet Under','Six Million Dollar Man','Skins','Sliders','Smallville','So Little Time','So Weird','Soldier of Fortune','Someday-paire','Sons of Anarchy','Sons Of Thunder','Sopranos','South of Nowhere','South Park','Space 1999','Space Cases','Space: Above and Beyond','Special Unit 2','Speed Racer','Spin City','Spongebob Squarepants','Sports Night','Spyder Games','Star Trek Deep Space Nine','Stargate Universe','Stargate: Atlantis','Stargate: SG-1','Starhunter','Starsky and Hutch','StarTrek: Deep Space Nine','StarTrek: Enterprise','StarTrek: Other','StarTrek: The Next Generation','StarTrek: The Original Series','StarTrek: Voyager','State of Grace','Step by Step','Stingers','Strange Days at Blake Holsey High','Strange TV','Street Justice','Strong Medicine','Studio 60 on the Sunset Strip','Sue Thomas:FB Eye','Suite Life of Zack and Cody','Summerland','Sunset Beach','Super Sentai','Superhuman Samurai Syber-Squad','Superman: The New Adventures of Lois and Clark','Supernatural','Surface','Swans Crossing','Taken','Tales of the Golden Monkey','Tales of the South Seas','Tarzan','Taxi','Team Knight Rider','Teen Titans','Teletubbies','Terminator: The Sarah Connor Chronicles','That 70\'s show','That\'s So Raven','The Farm','The L Word','The Monkees','The Nine','The Phoenix (TV 1982)','The Real L Word','The Tudors','The Ultimate Fighter','Third Watch','Thomas the Tank Engine','Threat Matrix','Three Rivers','Three\'s Company','Threshold','Thunderbirds','Time Trax','Tin Man','Tipping The Velvet','Titus','Tomorrow People','TorchWood','Total Recall 2070','Touched by an Angel','Touching Evil','Tour of Duty','Tracker','Tremors','Tribe','Tru Calling','True Blood','Turks','TVB (Hong Kong)','Twice in a Lifetime','Twilight Zone','Twin Peaks','Two Guys & a Girl','UC: UnderCover','UFO','Ugly Betty','Unhappily Ever After','Upstairs Downstairs','V','Vampire Diaries','Vampire High','Vampire knight','Vengeance Unlimited','Veritas: The Quest','Veronica Mars','VIP','Viper','Voyage to the Bottom of the Sea','Voyagers!','VR.5','Waking the Dead','Walker, Texas Ranger','Waltons','War of the Worlds','Water Rats','Weird Science','Welcome Back Kotter','West Wing','What About Joan?','White Shadow','Who\'s the Boss?','Wild Card','Wild Kat','Wildfire','Will and Grace','Wings','Winnie the pooh','Wire in the Blood','Wiseguy','Wishbone','Witchblade','Without a Trace','Wizards and Warriors','Wizards of Waverly Place','WKRP in Cincinnati','Wolf Lake','Womens Murder Club','Wonder Woman','Wonder Years','Wonderfalls','Worst Witch','Wrestling','X-Files','Xena: Warrior Princess','Young Americans','Young and the Restless','Young Blades','Young Hercules','Young Ones','Young Rebels','Young Riders','yu yu hakusho','Zack Files','Zoey 101','Zorro'
			)
			,'Web Series' => array(
				'Anyone But Me'
				,'Venice'
			)
		)
	);

//This function is called on Plugin Activation
function FeFiction_Activate()
{
	global $wpdb;

	if ( !is_multisite() )
		exit( 'The FE Fiction plugin is only compatible with WordPress Multisite.' );

	$user_roles = 'a:5:{s:13:"administrator";a:2:{s:4:"name";s:13:"Administrator";s:12:"capabilities";a:66:{s:13:"switch_themes";b:1;s:11:"edit_themes";b:1;s:16:"activate_plugins";b:1;s:12:"edit_plugins";b:1;s:10:"edit_users";b:1;s:10:"edit_files";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:6:"import";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:8:"level_10";b:1;s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:12:"delete_users";b:1;s:12:"create_users";b:1;s:17:"unfiltered_upload";b:1;s:14:"edit_dashboard";b:1;s:14:"update_plugins";b:1;s:14:"delete_plugins";b:1;s:15:"install_plugins";b:1;s:13:"update_themes";b:1;s:14:"install_themes";b:1;s:11:"update_core";b:1;s:10:"list_users";b:1;s:12:"remove_users";b:1;s:9:"add_users";b:1;s:13:"promote_users";b:1;s:18:"edit_theme_options";b:1;s:13:"delete_themes";b:1;s:6:"export";b:1;s:14:"frm_view_forms";b:1;s:14:"frm_edit_forms";b:1;s:16:"frm_delete_forms";b:1;s:19:"frm_change_settings";b:1;}}s:6:"editor";a:2:{s:4:"name";s:6:"Editor";s:12:"capabilities";a:34:{s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;}}s:6:"author";a:2:{s:4:"name";s:6:"Author";s:12:"capabilities";a:9:{s:12:"delete_posts";i:1;s:22:"delete_published_posts";i:1;s:10:"edit_posts";i:1;s:20:"edit_published_posts";i:1;s:7:"level_0";i:1;s:7:"level_1";i:1;s:7:"level_2";i:1;s:13:"publish_posts";i:1;s:4:"read";i:1;}}s:11:"contributor";a:2:{s:4:"name";s:11:"Contributor";s:12:"capabilities";a:5:{s:10:"edit_posts";b:1;s:4:"read";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;}}s:10:"subscriber";a:2:{s:4:"name";s:10:"Subscriber";s:12:"capabilities";a:3:{s:20:"edit_published_posts";i:1;s:7:"level_0";i:1;s:4:"read";i:1;}}}';

	update_option( $wpdb->prefix.'user_roles_backup' , get_option($wpdb->prefix.'user_roles') );
	update_option( $wpdb->prefix.'user_roles' , unserialize($user_roles) );
}

//This function is called on Plugin De-Activation
function FeFiction_DeActivate()
{
	global $option_name;
	update_option($option_name, '0');
}

function FeFiction_Init_Taxonomies()
{
	global $custom_post_type,$custom_post_type_args;
	global $taxonomies,$option_name;

	register_post_type( $custom_post_type, $custom_post_type_args );
	create_post_type_files( $custom_post_type );


	foreach($taxonomies as $taxonomy_name => $taxonomy_info)
	{
		register_taxonomy($taxonomy_name, $taxonomy_info['object_type'], $taxonomy_info['args']);
	}

	if ( get_option($option_name)  != '1')
	{
		FeFiction_Generate_Terms();
		update_option($option_name, '1');
	}
	else
	{
		add_option($option_name, '1', '', 'yes');
	}

	flush_rewrite_rules( false );
}

function FeFiction_Init_Options()
{
	global $fe_fiction_options;

	/** START OVERRIDE THE DASHBOARD WITH A NICE CLEAN OPTIONS PAGE **/
	if(get_option($fe_fiction_wp_options['custom_dashboard']) == '1')
	{
		new_cms_dashboard_widget_function();
		add_action('admin_menu', 'disable_default_dashboard_widgets');
		add_action('admin_head', 'admin_register_head_new_cms_dashboard_37');
		add_action('wp_dashboard_setup', 'new_cms_dashboard_widgets' );
	}
	/** END OVERRIDE THE DASHBOARD WITH A NICE CLEAN OPTIONS PAGE **/

	/** START REMOVE ADMIN MENUS **/
	if(get_option($fe_fiction_wp_options['hide_admin_menus']) == '1')
	{
		add_action('admin_head', 'fe_fiction_remove_admin_menus');
	}
	/** END REMOVE ADMIN MENUS **/
}

function new_cms_dashboard_widget_function() {
	/** from fe-fiction-class **/
	global $custom_post_type;
    $siteurl = get_option('siteurl');

	/** WordPress Administration Bootstrap */
	include_once('views/new_dashboard_page.php');
} 

function new_cms_dashboard_widgets() {
	wp_add_dashboard_widget('new_cms_dashboard_widget', 'Your Options', 'new_cms_dashboard_widget_function');	
} 

function admin_register_head_new_cms_dashboard_37() {
    $siteurl = get_option('siteurl');
    $url = $siteurl . '/wp-content/plugins/' . basename(dirname(__FILE__)) . '/new_dashboard.css';
    echo "<link rel='stylesheet' type='text/css' href='$url' />\n";
}

/** START HIDE ADMIN MENU FOR NON-ADMIN USERS **/
function fe_fiction_remove_admin_menus()
{
	global $submenu,$menu;
	foreach($submenu as $url => $array)
	{
		unset($submenu[$url]);
	}
	foreach($menu as $id => $array)
	{
		unset($menu[$id]);
	}

	add_action('wp_print_footer_scripts', 'fe_fiction_remove_admin_menus_jscript');
}
function fe_fiction_remove_admin_menus_jscript()
{
	echo '<script>jQuery(\'#adminmenu\').css(\'width\',\'0px\').css(\'marginRight\',\'0px\').hide();jQuery(\'#wpbody\').css(\'marginLeft\',\'25px\');</script>';
}

function FeFiction_Init_Create_Custom_Fields()
{
	global $fic_post_custom_fields;

	if ( !empty( $fic_post_custom_fields ) )
	{
		foreach ( $fic_post_custom_fields as $custom_field )
		{
			foreach ( $custom_field['object_type'] as $object_type )
				add_meta_box( 'fe-fic-custom-fields', 'Fiction Meta Information', 'FeFiction_Display_Custom_Fields', $object_type, 'normal', 'high' );
		}
	}
}

function FeFiction_Display_Custom_Fields()
{
	include 'fe-fiction-display-custom-fields.php';
}


/**
 * Save custom fields data
 *
 * @param int $post_id The post id of the post being edited
 */
function FeFiction_Save_Custom_Fields( $post_id ) {
	global $fic_post_custom_fields_prefix,$fic_post_custom_fields;

	/* Prevent autosave from deleting the custom fields */
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
		return;

	$custom_fields = $fic_post_custom_fields;

	if ( !empty( $custom_fields )) {
		foreach ( $custom_fields as $custom_field ) {
			if ( isset( $_POST[$fic_post_custom_fields_prefix . $custom_field['field_id']] ))
				update_post_meta( $post_id, $fic_post_custom_fields_prefix . $custom_field['field_id'], $_POST[$fic_post_custom_fields_prefix . $custom_field['field_id']] );
			else
				delete_post_meta( $post_id, $fic_post_custom_fields_prefix . $custom_field['field_id'] );
		}
	}
}

function FeFiction_Generate_Terms()
{
	global $taxonomies;
	foreach($taxonomies as $taxonomy_name => $taxonomy_info)
	{
		if(array_key_exists('terms',$taxonomy_info))
		{
			foreach($taxonomy_info['terms'] as $term_name => $term_args)
			{
				wp_insert_term(
					$term_name // the term 
					,$taxonomy_name // the taxonomy
					,$term_args
				);
			}
		}
	}
}

function create_post_type_files( $post_type ) {
	$file = TEMPLATEPATH . '/single.php';
	if ( !empty( $post_type ) ) {
		$newfile = TEMPLATEPATH . '/single-' .  strtolower( $post_type ) . '.php';
		if ( !file_exists( $newfile )) {
			if ( @copy( $file, $newfile ) ) {
				chmod( $newfile, 0777 );
			} else {
				//echo "Failed to copy $file...\n";
			}
		}
	}
}

function FeFiction_Admin_Menu()
{
	add_options_page(__('FE Fiction'), __('FE Fiction'), 'Administrator', basename(__FILE__), 'FeFiction_Admin_Options_Page');
}

function FeFiction_Admin_Options_Page()
{
	include_once('views/fe-fiction-admin-options-form.php');
}

function FeFiction_Site_Submit_Display()
{
	global $taxonomies;
	$my_taxonomies = array_keys($taxonomies);

	include_once('views/fe-fiction-site-submit-form.php');
}

// disable default dashboard widgets
function disable_default_dashboard_widgets() {

	remove_meta_box('dashboard_right_now', 'dashboard', 'core');
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
	remove_meta_box('dashboard_plugins', 'dashboard', 'core');

	remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
	remove_meta_box('dashboard_primary', 'dashboard', 'core');
	remove_meta_box('dashboard_secondary', 'dashboard', 'core');
}
