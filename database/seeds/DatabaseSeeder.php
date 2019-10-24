<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Movie;
use App\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create('fr_FR');
    	//USER
      $user = new User;
      $user->username = 'userAdmin';
      $user->email = 'a@a.fr';
      $user->type = 'admin';
      $user->password = bcrypt('12345678');
      $user->save();



    	//MOVIE
      $movie = new Movie;
      $movie->title = 'The Ballad of Buster Scruggs';
      $movie->story = "Buster Scruggs, a cheerful singing cowboy, arrives at an isolated cantina full of outlaws where he exchanges insults with another patron before effortlessly shooting everyone as they reach for their guns. He then heads to Frenchman's Gulch and enters a saloon, leaving his guns at the door to comply with its no firearms policy.";
      $movie->year = 2018;
      $movie->actors =' Tim Blake Nelson/ Liam Neeson/ James Franco/ Brendan Gleeson/ Zoe Kazan/ Tyne Daly/ Harry Melling/ Bill Heck/ Tom Waits';
      $movie->avatar = 'ballad.png';
      $movie->save();

      $movie = new Movie;
      $movie->title = 'Hail, Caesar!';
      $movie->story = 'In 1951 Hollywood, Eddie Mannix is head of physical production at Capitol Pictures. His duties as the studio "fixer" find him corraling its scandalous stars, fending off twin gossip columnists Thora and Thessaly Thacker, and weighing an impressive job offer from the Lockheed Corporation. When unmarried synchronized swimming actress DeeAnna Moran becomes pregnant, Mannix arranges for her to place the baby in foster care then discreetly adopt it, preserving her image..';
      $movie->year = 2016;
      $movie->actors ='Josh Brolin/ George Clooney/ Alden Ehrenreich/ Ralph Fiennes/ Jonah Hill/ Scarlett Johansson/ Frances McDormand/ Tilda Swinton/ Channing Tatum';
      $movie->avatar = 'hailcaesar.png';
      $movie->save();

      $movie = new Movie;
      $movie->title = 'Inside Llewyn Davis';
      $movie->story = "In February 1961, Llewyn Davis is a struggling folk singer in New York City's Greenwich Village. His recent solo album Inside Llewyn Davis is not selling; he has no money and is sleeping on the couches of friends and acquaintances. After playing the Gaslight Cafe one night he is beaten up in the alley behind the cafe, for reasons not immediately apparent, by a shadowy man in hat and suit, with a discernible southern accent.";
      $movie->year = 2013;
      $movie->actors ='Oscar Isaac/  Carey Mulligan/ John Goodman/ Garrett Hedlund/ F. Murray Abraham/ Justin Timberlake';
      $movie->avatar = 'insideLD.jpg';
      $movie->save();

      $movie = new Movie;
      $movie->title = 'True Grit';
      $movie->story = 'Feisty 14 year-old farm girl Mattie Ross (Steinfeld) hires Cogburn (Bridges), a boozy, trigger-happy lawman after an outlaw named Tom Chaney (Brolin) murders her father. The bickering duo are accompanied on their quest by a Texas Ranger named LaBoeuf (Damon) who has been tracking Chaney for killing a State Senator. As they embark on a dangerous adventure, each character has his or her "grit" tested in different ways.';
      $movie->year = 2010;
      $movie->actors =' Hailee Steinfeld/ Jeff Bridges/ Matt Damon/ Josh Brolin/ Barry Pepper';
      $movie->avatar = 'grit.jpg';
      $movie->save();

      $movie = new Movie;
      $movie->title = 'A Serious Man';
      $movie->story = 'In a prologue, a Jewish man in an unnamed 19th-century Eastern European shtetl tells his wife that he was helped on his way home by Reb Groshkover, whom he has invited in for soup. She says Groshkover is dead and the man he invited must be a dybbuk. Groshkover arrives and laughs off the accusation, but she plunges an ice pick into his chest. Bleeding, he exits their home into the snowy night.';
      $movie->year = 2009;
      $movie->actors ='Michael Stuhlbarg/ Richard Kind/ Sari Lennick/ Fred Melamed/ Aaron Wolff/ Jessica McManus/ Alan Mandell/ Adam Arkin';
      $movie->avatar = 'seriousman.png';
      $movie->save();

      $movie = new Movie;
      $movie->title = 'Burn After Reading';
      $movie->story = 'Faced with a demotion at work due to an alleged drinking problem, Osbourne "Ozzie" Cox (Malkovich) angrily quits his job as a CIA analyst and decides to write a memoir. When his pediatrician wife Katie (Swinton) finds out, she sees it as an opportunity to file for divorce and continue her affair with Harry Pfarrer (Clooney), a married U.S. Marshal.';
      $movie->year = 2008;
      $movie->actors =' George Clooney/ Frances McDormand/ John Malkovich/ Tilda Swinton/ Richard Jenkins/ Brad Pitt';
      $movie->avatar = 'burn.png';
      $movie->save();

      $movie = new Movie;
      $movie->title = 'No Country for Old Men';
      $movie->story = "In Texas, 1980, hitman Anton Chigurh strangles a deputy sheriff with the handcuffs he is in to escape custody and uses a captive bolt pistol to kill a driver and steal his car. He spares the life of a gas station owner who guesses the result of a coin Chigurh flipped, revealing Chigurh's adherence to his own personal 'principles'.";
      $movie->year = 2007;
      $movie->actors =' George Clooney/ Frances McDormand/ John Malkovich/ Tilda Swinton/ Richard Jenkins/ Brad Pitt';
      $movie->avatar = 'NCFOM.jpg';
      $movie->save();

      $movie = new Movie;
      $movie->title = 'The Ladykillers';
      $movie->story = "Mrs. Marva Munson, a strict, religious and elderly widow, meets 'Professor' Goldthwaite Higginson Dorr, a southern classicist and Edgar Allan Poe enthusiast who expresses interest in the room she has for rent and asks to use her root cellar for rehearsals of an early music ensemble he directs, to which she agrees. The fellow musicians in the pretend ensemble are actually a gang of criminals.";
      $movie->year = 2004;
      $movie->actors =' Tom Hanks/ Irma P. Hall/ Marlon Wayans/ TJ. K. Simmons/ Tzi Ma/ Ryan Hurst';
      $movie->avatar = 'ladykillers.jpg';
      $movie->save();

      $movie = new Movie;
      $movie->title = 'Intolerable Cruelty';
      $movie->story = 'Donovan Donaly (Geoffrey Rush) a TV soap opera producer, walks in on his wife Bonnie (Stacey Travis) being intimate with an ex-boyfriend. He files for divorce, and Bonnie hires Miles Massey (George Clooney), a top divorce attorney and the inventor of the "Massey pre-nup", a completely foolproof prenuptial agreement. Miles wins a large property settlement against Donaly, leaving him broke.';
      $movie->year = 2003;
      $movie->actors =' George Clooney/ Catherine Zeta-Jones/ Geoffrey Rush/ Cedric the Entertainer/ Edward Herrmann/ Richard Jenkins';
      $movie->avatar = 'intolerableCruelty.jpg';
      $movie->save();

      $movie = new Movie;
      $movie->title = "The Man Who Wasn't There";
      $movie->story = 'In 1949, Ed Crane is a low-key barber in the town of Santa Rosa, California. He is married to Doris, a bookkeeper with a drinking problem, and he works in a barber shop that is owned by his brother-in-law, Frank. A customer named Creighton Tolliver tells Ed that he is a businessman looking for investors to put up $10,000 in a new technology called dry cleaning';
      $movie->year = 2001;
      $movie->actors =' Billy Bob Thornton/ Frances McDormand/ Michael Badalucco/ Richard Jenkins/ Scarlett Johansson/ Jon Polito';
      $movie->avatar = 'TMWWT.jpg';
      $movie->save();

      $movie = new Movie;
      $movie->title = "O Brother, Where Art Thou?";
      $movie->story = "In 1937 Mississippi during the Great Depression, three convicts, Ulysses Everett McGill, Pete Hogwallop, and Delmar O'Donnell, escape from a chain gang and set out to retrieve a supposed treasure Everett buried, before its locale is flooded to make a lake and provide electricity for the state. The three get a lift from a blind man driving a handcar on a railway. He tells them, among other prophecies, that they will find a fortune but not the one they seek. The trio make their way to the house of Wash, Pete's cousin.";
      $movie->year = 2000;
      $movie->actors =' George Clooney/ John Turturro/ Tim Blake Nelson/ Charles Durning/ Michael Badalucco/ John Goodman';
      $movie->avatar = 'oBrother.jpg';
      $movie->save();

      $movie = new Movie;
      $movie->title = "The Big Lebowski";
      $movie->story = "In 1991, Jeffrey 'The Dude' Lebowski, a middle-aged bachelor with a penchant for cannabis and bowling, gets assaulted in his Los Angeles home by two goons hired by pornographer Jackie Treehorn, demanding money owed to him by the wife of another, wealthier Jeffrey Lebowski (the eponymous 'Big Lebowski'). Realizing they have the wrong man, they leave, but not before one of them urinates on The Dude's rug.";
      $movie->year = 1998;
      $movie->actors =' Jeff Bridges/ John Goodman/  Julianne Moore/ Steve Buscemi/ David Huddleston/ John Turturro';
      $movie->avatar = 'bigLebowski.jpg';
      $movie->save();

      $movie = new Movie;
      $movie->title = "Fargo";
      $movie->story = "In the winter of 1987, Jerry Lundegaard, the sales manager at an Oldsmobile dealership in Minneapolis, is desperate for money. He floats a GMAC loan worth $320,000, which he collateralizes with nonexistent vehicles and is unable to pay back. On the advice of the dealership mechanic (and paroled ex-convict) Shep Proudfoot, Jerry travels to Fargo, North Dakota and hires small-time criminals Gaear Grimsrud and Carl Showalter to kidnap his wife, Jean, and extort a ransom from his wealthy father-in-law and dealership boss, Wade Gustafson. Payment would be a new car, and half of the $80,000 ransom.";
      $movie->year = 1996;
      $movie->actors ='Frances McDormand/ William H. Macy/ Steve Buscemi/ Harve Presnell/ Peter Stormare';
      $movie->avatar = 'fargo.jpg';
      $movie->save();

      $movie = new Movie;
      $movie->title = "The Hudsucker Proxy ";
      $movie->story = "In December 1958, Norville Barnes, a business college graduate from Muncie, Indiana, arrives in New York City looking for a job. He struggles due to lack of experience and becomes a mailroom clerk at Hudsucker Industries. Meanwhile, the company's founder and president, Waring Hudsucker, unexpectedly commits suicide during a business meeting by jumping out of a top-floor window.";
      $movie->year = 1994;
      $movie->actors ='Tim Robbins/ Jennifer Jason Leigh/ Paul Newman';
      $movie->avatar = 'hudsuckerProxy.jpg';
      $movie->save();

      $movie = new Movie;
      $movie->title = "Barton Fink";
      $movie->story = "In 1941, up-and-coming Broadway playwright Barton Fink (Turturro) accepts a contract from Capitol Pictures in Hollywood to write film scripts for a thousand dollars per week. Upon moving to Los Angeles, Fink settles into the cheap Hotel Earle. His room's only decoration is a small painting of a woman on the beach, arm raised to block the sun. Fink is assigned to a wrestling film by his new boss Jack Lipnick (Lerner), but he finds difficulty in writing for the unfamiliar subject. He is distracted by sounds coming from the room next door, and he phones the front desk to complain.";
      $movie->year = 1991;
      $movie->actors =' John Turturro/ John Goodman/ Judy Davis/ Michael Lerner/ John Mahoney/ Jon Polito';
      $movie->avatar = 'bartonFink.jpg';
      $movie->save();

      $movie = new Movie;
      $movie->title = "Miller's Crossing";
      $movie->story = "Tom Reagan is the right-hand man for Leo O'Bannon, an Irish mobster and political boss who runs a U.S. city during Prohibition. When Leo's rival, the Italian gangster Johnny Caspar, announces his intent to kill bookie Bernie Bernbaum, Leo goes against Tom's advice and extends his protection to Bernie, who is the brother of Verna, who has begun a relationship with Leo – while also carrying on an affair with Tom.";
      $movie->year = 1990;
      $movie->actors ='Gabriel Byrne/ Marcia Gay Harden/ John Turturro/ Jon Polito/ J. E. Freeman/ Albert Finney';
      $movie->avatar = 'millersCrossing.jpg';
      $movie->save();

      $movie = new Movie;
      $movie->title = "Raising Arizona";
      $movie->story = "Convenience store robber Herbert I. 'Hi' McDunnough and police officer Edwina 'Ed' meet after she takes the mugshots of the recidivist. During subsequent visits, Hi learns that Ed's fiancé has left her. Hi proposes to her after his latest release from prison, and the two get married. They move into a desert mobile home, and Hi gets a job in a machine shop.";
      $movie->year = 1987;
      $movie->actors ='Nicolas Cage/ Holly Hunter/ John Goodman/ William Forsythe';
      $movie->avatar = 'raisingArizona.jpg';
      $movie->save();

      $movie = new Movie;
      $movie->title = "Blood Simple";
      $movie->story = "Abby and Ray are driving through a heavy downpour at night, discussing Abby's bad marriage. Ray drives to a motel, where they have sex. Abby's husband, Julian Marty, has hired a private detective, Lorren Visser, to follow Abby. Visser takes photos of the tryst and delivers them to Marty. Ray is a bartender working at Marty's bar.";
      $movie->year = 1984;
      $movie->actors =' / John Getz/ Frances McDormand/ Dan Hedaya/ Samm-Art Williams/ M. Emmet Walsh';
      $movie->avatar = 'bloodSimple.jpg';
      $movie->save();

    	//ARTICLE
      
      $article = new Article;
      $article->title = "The two headed director";
      $article->content = "In their early days, the Coen brothers focused on working with four hands on the scripts, mentioning Joel to the director and Ethan to the production. Since 2003, the brothers appear more inseparable than ever. Despite the three years between them, Joel and Ethan Coen have similar lives: studies, careers, family life. Almost fusion, the Coen brothers even have fun calling themselves 'the director with two heads'";
      $article->save();  

      $article = new Article;
      $article->title = "Too good for the others";
      $article->content = "In 1991, the Coen brothers won everything at the Cannes Film Festival where they came to present Barton Fink. If it made a few teeth grind at the time, the leaders pounce on anyone who wants to hear it that it is not contrary to the regulations. In 1999, Bruno Dumont and his Humanity won the three prizes. Two years later it is The Pianist of Haneke who realizes the same feat... This year, the organizers took steps to prevent cumulative awards.";
      $article->save();        

      $article = new Article;
      $article->title = "Tradition?";
      $article->content = "Since their first film, the Coen brothers have collaborated with prestigious actors who trust them. By working for them, these actors embody atypical and counter-employed characters often distinguished during ceremonies and festivals. Nevertheless, they do not hesitate to work punctually with actors who reveal a completely different face by collaborating with the Coen brothers, this is the case of Oscar Isaac, Javier Bardem or Hailee Steinfeld.";
      $article->save(); 

      $article = new Article;
      $article->title = "The moron trilogy";
      $article->content = "What do O'Brother, Intolerable Cruelty and Burn After Reading have in common? Apart from the fact that they were all directed by the Coen brothers, these films are also led by George Clooney. And in each of them, the actor plays a silly character. So much so that Ethan Coen ended up calling these three feature films, informally, 'La trilogie des idiots' - even if Ave, César! , released in 2016, can also be part of this selection.";
      $article->save(); 

      $article = new Article;
      $article->title = "Is it a movie?";
      $article->content = "The Ballad of Buster Scruggs is a western divided into six chapters. Each part is interested in a legend of the Wild West. Initially, the directors were supposed to shoot a mini-series of anthology. They finally opted for the sketchy film format, which was shorter than originally intended. The feature film begins with a first story centered on Buster Scruggs, a friendly cowboy. Coincidence or wink: Ethan Coen’s son also bears the sweet name of Buster!
";
      $article->save();

      $article = new Article;
      $article->title = "Remember your line";
      $article->content = "The Coen brothers have several caps and control their films from A to Z. They leave nothing to chance, nor to improvisation. As George Clooney said in Variety: I remember the shooting of the film O'Brother and you don’t improvise with them, because it’s like improvising with Shakespeare. They have a specific pattern in the construction and rhythm of their writing. They are great writers. They are incredibly imaginative directors and, most importantly, it’s very fun to work with them. Every time they call me, I just say 'Tell me where and I’ll be there'.";

      $article = new Article;
      $article->title = "Who is he?";
      $article->content = "In 1997, Roderick Jaynes was named to the Oscars for his work on editing Fargo. Same thing in 2008 for No Country for Old Men. What we don’t really know at the time.... is that this person doesn’t exist! Jaynes is actually a pseudonym used by the two directors, who edit their own films. A little joke of the Coens, who had fun inventing a life for him, in which they paint the portrait of a 90-year-old man, not fit enough to come and get a possible trophy at the Oscars.";


      $article = new Article;
      $article->title = "Dear Stanley";
      $article->content = "Ethan and Joel Coen do not hide it: they are very fan of Stanley Kubrick’s cinema. Some plans of their films are thus undetected tributes to the director’s filmography. Barton Fink can be cited as one of the long scenes in the hallway, a direct nod to Shining. We can also mention this replica popularized by Orange Mécanique 'The Old In and Out', which can be heard in the film Fargo.";


      $article = new Article;
      $article->title = "French Award";
      $article->content = "Honorary decoration awarded by the French Ministry of Culture, the Commanders of Arts and Letters are talented personalities rewarded for their creativity and multiple works. In 2013, the Coen brothers were honoured to receive this award from the then Minister of Culture, Aurélie Filippetti. The directors were rewarded for their entire career, for their 'singular writing' and their 'attention to detail'.";
    }
  }