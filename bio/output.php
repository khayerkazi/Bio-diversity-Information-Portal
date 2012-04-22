<?php
    include_once 'includes\functions.php';

    $connect = oci_connect('system', '1234', 'localhost/XE');
    if(!$connect){
        echo "connection failed !!!";
    }
	
    
?>
<?php
	echo "Starting...<br>";
if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Carnivora')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Carnivora','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Felidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Carnivora');
ENTER_NEW_CLASSIFICATION($connect,'Felidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Puma') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Felidae');
ENTER_NEW_CLASSIFICATION($connect,'Puma','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Puma concolor') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Puma');
ENTER_NEW_CLASSIFICATION($connect,"Puma concolor","Tawny. Sides of the muzzle, backs of ears, and tip of tail are black. Belly fur is buff or nearly white in color. Young are spotted and have a ringed tail until six months of age. This is the largest of the wild cats in North America. Total length ranges from 2.1 - 2.7 m (7 - 9 ft), and weight ranges from 36.3 - 90.7 kg (80 - 200 lbs). The tail is usually 61 - 91.4 cm (2-3 ft) long. This is a large, unspotted, long-tailed cat.", $fk, 'SPECIES',"Mountain Lion");
}Echo "Entry 1 complete";

//This is input #2

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','primate')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'primate','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Hominidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'primate');
ENTER_NEW_CLASSIFICATION($connect,'Hominidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','homo') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Hominidae');
ENTER_NEW_CLASSIFICATION($connect,'homo','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'homo sapiens') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'homo');
ENTER_NEW_CLASSIFICATION($connect,"homo sapiens","This is Human that what we are !!!", $fk, 'SPECIES',"Human");
}Echo "Entry 2 complete";

//This is input #3

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Amphibia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Amphibia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Anura')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Amphibia');
ENTER_NEW_CLASSIFICATION($connect, 'Anura','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Ranidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Anura');
ENTER_NEW_CLASSIFICATION($connect,'Ranidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Rana') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Ranidae');
ENTER_NEW_CLASSIFICATION($connect,'Rana','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Rana pipiens') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Rana');
ENTER_NEW_CLASSIFICATION($connect,"Rana pipiens","Spotted like a leopard, with large dark green to brown spots on its back, sides, and legs. The spots on the sides and legs may be smaller than those on the back. Occasionally, there are no spots on the body at all. The upper jaw has a light, sometimes yellow stripe. A medium~sized frog, 5.1 ~ 8.9 cm (2 ~ 3.5 in) in lengt", $fk, 'SPECIES',"Leopard Frog");
}Echo "Entry 3 complete";

//This is input #4

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Amphibia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Amphibia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Anura')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Amphibia');
ENTER_NEW_CLASSIFICATION($connect, 'Anura','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Ranidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Anura');
ENTER_NEW_CLASSIFICATION($connect,'Ranidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Rana') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Ranidae');
ENTER_NEW_CLASSIFICATION($connect,'Rana','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Rana sylvatica') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Rana');
ENTER_NEW_CLASSIFICATION($connect,"Rana sylvatica","Can range from light tan to pinkish to brown, bronze, or almost black. The back is fairly uniform in color, with little blotching. There may be a few small blotches on the sides. The belly is white and may have some dark specks on the throat or upper chest. This frog has a dark mask that extends backwards from the eye, covering the tympanum. This mask is always visible. There is a light line on the upper jaw below the mask. A small frog, 3.5 ~ 7.6 mm (1 3/8~3 in) in length.", $fk, 'SPECIES',"Wood frog");
}Echo "Entry 4 complete";

//This is input #5

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Amphibia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Amphibia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Caudata')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Amphibia');
ENTER_NEW_CLASSIFICATION($connect, 'Caudata','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Ambystomatidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Caudata');
ENTER_NEW_CLASSIFICATION($connect,'Ambystomatidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Ambystoma') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Ambystomatidae');
ENTER_NEW_CLASSIFICATION($connect,'Ambystoma','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Ambystoma tigrinum') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Ambystoma');
ENTER_NEW_CLASSIFICATION($connect,"Ambystoma tigrinum","Coloration is variable; the back is black to brown, with spots that are irregularly shaped, fairly large, and may blend into bars or remain discrete. The spots extend well down the sides almost to the belly. The belly is olive or yellow and may have dark specks. Commonly 15 ~ 20 cm (6 ~ 8 in) This is a large, robust salamander that usually has 12 or 13 costal grooves.", $fk, 'SPECIES',"Eastern Tiger Salamander");
}Echo "Entry 5 complete";

//This is input #6

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Amphibia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Amphibia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Caudata')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Amphibia');
ENTER_NEW_CLASSIFICATION($connect, 'Caudata','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Ambystomatidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Caudata');
ENTER_NEW_CLASSIFICATION($connect,'Ambystomatidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Ambystoma') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Ambystomatidae');
ENTER_NEW_CLASSIFICATION($connect,'Ambystoma','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Ambystoma talpoideum') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Ambystoma');
ENTER_NEW_CLASSIFICATION($connect,"Ambystoma talpoideum","This salamander has a dark back that may be black, brown, or gray, and a lighter gray belly. The back is covered with bluish~white specks that make it appear dusty. 7 ~ 10 cm (3 ~ 4 in) This is a small, nondescript salamander with a stout body and limbs, and a short, stocky tail. Its head is large, and it has 10 or 11 costal grooves.", $fk, 'SPECIES',"Mole Salamander");
}Echo "Entry 6 complete";

//This is input #7

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Amphibia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Amphibia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Caudata')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Amphibia');
ENTER_NEW_CLASSIFICATION($connect, 'Caudata','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Ambystomatidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Caudata');
ENTER_NEW_CLASSIFICATION($connect,'Ambystomatidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Ambystoma') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Ambystomatidae');
ENTER_NEW_CLASSIFICATION($connect,'Ambystoma','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Ambystoma maculatum') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Ambystoma');
ENTER_NEW_CLASSIFICATION($connect,"Ambystoma maculatum","Shades of black, gray or brown on its back, gray on its belly. Down each side of the spine, there are two rows of spots which are very regular in size and shape. There may be as many as 50 spots, with both orange and yellow spots on the same individual. 15 ~ 24 cm (6 ~ 9.5 in) This is a large, solidly built salamander with 12 costal grooves.", $fk, 'SPECIES',"spotted salamander");
}Echo "Entry 7 complete";

//This is input #8

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Amphibia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Amphibia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Caudata')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Amphibia');
ENTER_NEW_CLASSIFICATION($connect, 'Caudata','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'sirendae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Caudata');
ENTER_NEW_CLASSIFICATION($connect,'sirendae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','siren') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','sirendae');
ENTER_NEW_CLASSIFICATION($connect,'siren','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'siren lacertina') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'siren');
ENTER_NEW_CLASSIFICATION($connect,"siren lacertina","The back is olive green to light gray. The sides may be marked with lighter spots, blotches or lines. The belly is lighter with light specks and blotches of yellow~green. A young Greater Siren has a light stripe on the sides of the body which is lost as it grows older. The Greater Siren is the largest of the sirens, ranging from 48 ~ 97 cm (19 ~ 38 in) in length.", $fk, 'SPECIES',"Greater siren");
}Echo "Entry 8 complete";

//This is input #9

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Rodentia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Rodentia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Sciuridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Rodentia');
ENTER_NEW_CLASSIFICATION($connect,'Sciuridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Glaucomys') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Sciuridae');
ENTER_NEW_CLASSIFICATION($connect,'Glaucomys','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Glaucomys volans') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Glaucomys');
ENTER_NEW_CLASSIFICATION($connect,"Glaucomys volans","The fine, silky fur is gray in color on the back and white on the belly. The tail is gray above and pinkish cinnamon below. Adults range in size from 21 ~ 25 cm (8.3 ~ 9.8 in) in total length. The Southern Flying Squirrel has large, black eyes, prominent ears, and a bushy, flattened tail. It has a loose fold of skin that connects the forelimbs to the hindlimbs from wrist to ankle. This fold of skin, called a 'patagium,' serves as the gliding membrane when the limbs are fully extended.", $fk, 'SPECIES',"Southern Flying Squirrel");
}Echo "Entry 9 complete";

//This is input #10

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Rodentia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Rodentia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'muridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Rodentia');
ENTER_NEW_CLASSIFICATION($connect,'muridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','peromyscus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','muridae');
ENTER_NEW_CLASSIFICATION($connect,'peromyscus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'peromyscus gossypinus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'peromyscus');
ENTER_NEW_CLASSIFICATION($connect,"peromyscus gossypinus","This is the darkest mouse in the southeastern United States. The fur is dark brown on the animal's back, being darkest down the middle of the back and lighter on the sides. The belly and feet are white. This is the largest member of the genus Peromyscus. It reaches a total length of 18 ~ 20 cm (7.1 ~ 7.9 in). none", $fk, 'SPECIES',"cotton mouse");
}Echo "Entry 10 complete";

//This is input #11

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Crocodylia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Crocodylia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Alligatoridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Crocodylia');
ENTER_NEW_CLASSIFICATION($connect,'Alligatoridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Alligator') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Alligatoridae');
ENTER_NEW_CLASSIFICATION($connect,'Alligator','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Alligator mississippiensis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Alligator');
ENTER_NEW_CLASSIFICATION($connect,"Alligator mississippiensis","The young are dark grey to black, striped with bright yellow which fades with age. Adult alligators are dark grey to black. This is the largest reptile in North America. Adults range from 1.8 ~ 4.9 m (6 ~ 16 ft). The record is 5.8 m (19 ft 2 in). Males grow larger than females. The snout is broad. The large fourth tooth is not visible when the mouth is closed.", $fk, 'SPECIES',"Alligator");
}Echo "Entry 11 complete";

//This is input #12

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Lacertilia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Lacertilia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Anguidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Lacertilia');
ENTER_NEW_CLASSIFICATION($connect,'Anguidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Ophisaurus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Anguidae');
ENTER_NEW_CLASSIFICATION($connect,'Ophisaurus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Ophisaurus .') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Ophisaurus');
ENTER_NEW_CLASSIFICATION($connect,"Ophisaurus .","All four species of glass lizards have dark stripes on the back and sides. The basic ground colors are light brown, tan, yellowish, or blackish. Large adult Eastern Glass Lizards are sometimes greenish in color. 46 ~ 107 cm (18.1 ~ 42.1 in) in total length. The Mimic Glass Lizard and the Island Glass Lizard are smaller and range from 38 ~ 66 cm (15 ~ 26 in) in total length. Glass lizards are snake~like lizards without legs. They have moveable eyelids and external ear openings and snakes do not. The head and body generally account for only one third the total length of the lizard, while the tail makes up two~thirds the length of the animal. There is a distinct groove along each side of the body which permits expansion of the body when the lizard is distended with food or eggs. The common name of these lizards arises because they have a very long tail that breaks off more easily than that of other lizards. It may break off when the animal is captured or handly roughly. A new, shorter tail will grow in its place.", $fk, 'SPECIES',"Slender Glass Lizard");
}Echo "Entry 12 complete";

//This is input #13

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Lacertilia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Lacertilia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Anguidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Lacertilia');
ENTER_NEW_CLASSIFICATION($connect,'Anguidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Ophisaurus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Anguidae');
ENTER_NEW_CLASSIFICATION($connect,'Ophisaurus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Ophisaurus compressus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Ophisaurus');
ENTER_NEW_CLASSIFICATION($connect,"Ophisaurus compressus","All four species of glass lizards have dark stripes on the back and sides. The basic ground colors are light brown, tan, yellowish, or blackish. Large adult Eastern Glass Lizards are sometimes greenish in color. 38 ~ 66 cm (15 ~ 26 in) in total length. Glass lizards are snake~like lizards without legs. They have moveable eyelids and external ear openings and snakes do not. The head and body generally account for only one third the total length of the lizard, while the tail makes up two~thirds the length of the animal. There is a distinct groove along each side of the body which permits expansion of the body when the lizard is distended with food or eggs. The common name of these lizards arises because they have a very long tail that breaks off more easily than that of other lizards. It may break off when the animal is captured or handly roughly. A new, shorter tail will grow in its place.", $fk, 'SPECIES',"Island Glass Lizard");
}Echo "Entry 13 complete";

//This is input #14

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Lacertilia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Lacertilia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Anguidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Lacertilia');
ENTER_NEW_CLASSIFICATION($connect,'Anguidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Ophisaurus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Anguidae');
ENTER_NEW_CLASSIFICATION($connect,'Ophisaurus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Ophisaurus mimicus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Ophisaurus');
ENTER_NEW_CLASSIFICATION($connect,"Ophisaurus mimicus","All four species of glass lizards have dark stripes on the back and sides. The basic ground colors are light brown, tan, yellowish, or blackish. Large adult Eastern Glass Lizards are sometimes greenish in color. 38 ~ 66 cm (15 ~ 26 in) in total length. Glass lizards are snake~like lizards without legs. They have moveable eyelids and external ear openings and snakes do not. The head and body generally account for only one third the total length of the lizard, while the tail makes up two~thirds the length of the animal. There is a distinct groove along each side of the body which permits expansion of the body when the lizard is distended with food or eggs. The common name of these lizards arises because they have a very long tail that breaks off more easily than that of other lizards. It may break off when the animal is captured or handly roughly. A new, shorter tail will grow in its place.", $fk, 'SPECIES',"Mimic Glass Lizard");
}Echo "Entry 14 complete";

//This is input #15

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Anguidae')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Anguidae','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Ophisaurus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Anguidae');
ENTER_NEW_CLASSIFICATION($connect,'Ophisaurus','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Ophisaurus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Ophisaurus');
ENTER_NEW_CLASSIFICATION($connect,'Ophisaurus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'All four') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Ophisaurus');
ENTER_NEW_CLASSIFICATION($connect,"All four"," 107 cm (18.1 ~ 42.1 in) in total length. Glass lizards are snake~like lizards without legs. They have moveable eyelids and external ear openings and snakes do not. The head and body generally account for only one third the total length of the lizard, while the tail makes up two~thirds the length of the animal. There is a distinct groove along each side of the body which permits expansion of the body when the lizard is distended with food or eggs. The common name of these lizards arises because they have a very long tail that breaks off more easily than that of other lizards. It may break off when the animal is captured or handly roughly. A new, shorter tail will grow in its place.", $fk, 'SPECIES',"Eastern Glass Lizard");
}Echo "Entry 15 complete";

//This is input #16

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Lacertilia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Lacertilia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Polychrotidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Lacertilia');
ENTER_NEW_CLASSIFICATION($connect,'Polychrotidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Anolis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Polychrotidae');
ENTER_NEW_CLASSIFICATION($connect,'Anolis','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Anolis carolinensis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Anolis');
ENTER_NEW_CLASSIFICATION($connect,"Anolis carolinensis","A green or brown lizard covered in small granular scales. Males have a pink colored throat fan (called a dewlap), which is used in both territorial and courtship displays. Green Anoles are also known as 'chameleons' based on their ability to change color. The color varies from brown to mottled green and brown to pure green, depending on the anole's body temperature, activity or behavior. Adults average from 125 ~ 203 mm (5 ~ 8 in) in total length.", $fk, 'SPECIES',"Green Anole");
}Echo "Entry 16 complete";

//This is input #17

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Lacertilia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Lacertilia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Scincidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Lacertilia');
ENTER_NEW_CLASSIFICATION($connect,'Scincidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Eumeces') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Scincidae');
ENTER_NEW_CLASSIFICATION($connect,'Eumeces','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Eumeces fasciatus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Eumeces');
ENTER_NEW_CLASSIFICATION($connect,"Eumeces fasciatus","Juveniles have five longitudinal yellowish or white stripes against a black background color and a bright blue tail. As a female matures the stripes become lighter and the tail becomes gray. The adult male is plain tan to bronze, with very pale stripes. The male has an orangish~red head and jowls, which are especially bright in the spring breeding season. A medium~sized lizard ranging from 12.5 ~ 21.5 cm (4.9 ~ 8.5 in) in total length. Because other species are similarly patterned and undergo similar color changes, it is necessary to look at scale patterns for a positive identification. Look under the base of the tail. The middle row of scales should be enlarged. There should be 26~30 longitudinal rows of scales around the center of the body. There are usually 4 labial scales anterior to the sub ocular scale. There are two enlarged postlabial scales.", $fk, 'SPECIES',"Five~lined Skink");
}Echo "Entry 17 complete";

//This is input #18

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Squamata')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Squamata','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Lacertilia') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Squamata');
ENTER_NEW_CLASSIFICATION($connect,'Lacertilia','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Teiidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Lacertilia');
ENTER_NEW_CLASSIFICATION($connect,'Teiidae','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Cnemidophorus Species~Cnemidophorus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Teiidae');
ENTER_NEW_CLASSIFICATION($connect,"Cnemidophorus Species~Cnemidophorus","As its name would suggest, the Six~lined Racerunner has six yellow, white, pale gray, or pale blue stripes on the back and sides. The ground color ranges from brown, greenish brown, to almost black. There is a short dark stripe, bordered above by a light stripe on the sides of the tail. Adults range in size from 152 ~ 241 mm (6 ~ 9.5 in) in total length, with a head and body maximum of 75 mm (3 in). This is a medium~sized lizard. The belly has rows of enlarged scales which are much larger than those on the back and sides.", $fk, 'SPECIES',"Sixlined Racerunner");
}Echo "Entry 18 complete";

//This is input #19

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Serpentes')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Serpentes','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Colubridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Serpentes');
ENTER_NEW_CLASSIFICATION($connect,'Colubridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Coluber') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Colubridae');
ENTER_NEW_CLASSIFICATION($connect,'Coluber','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Coluber constrictor') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Coluber');
ENTER_NEW_CLASSIFICATION($connect,"Coluber constrictor","Adults in the eastern and southeastern United States are uniformly black, both above and below, with smooth scales and a satiny appearance. Juveniles are patterned with a row of dark gray, brown, or reddish brown blotches down the length of the back. These are set against a background color of gray or bluish gray. This pattern disappears as the animal matures and the solid black color is present by the time individuals reach 90 cm (35.4 in) in length. The Eastern Racer is a large, slender~bodied snake averaging 90 ~ 152 cm (35.4 ~ 59.8 in) in total length. The record is 185.4 cm (73 in) in total length. Hatchlings average about 29 cm (11.4 in) in total length. Racers are sexually mature by the time they reach 90 cm (35.4 in) in length. Females grow slightly larger than males.", $fk, 'SPECIES',"Eastern Racer");
}Echo "Entry 19 complete";

//This is input #20

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Serpentes')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Serpentes','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Colubridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Serpentes');
ENTER_NEW_CLASSIFICATION($connect,'Colubridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Drymarchon') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Colubridae');
ENTER_NEW_CLASSIFICATION($connect,'Drymarchon','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Drymarchon couperi') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Drymarchon');
ENTER_NEW_CLASSIFICATION($connect,"Drymarchon couperi","These smooth scaled snakes are glossy blue~black over the entire body. The chin, throat, and sides of the head may be reddish or orange brown. The color of young snakes is the same as the adults but is more reddish on the head and front part of the belly. The Eastern Indigo Snake is the largest snake in North America. The record total length is 263 cm (103.5 in). Adults generally average between 152 ~ 213 cm (59.8 ~ 83.9 in) in length. The young are large at hatching, measuring from 43.2 ~ 61.0 cm (17 ~ 24 in).", $fk, 'SPECIES',"Eastern Indigo Snake");
}Echo "Entry 20 complete";

//This is input #21

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Serpentes')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Serpentes','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Colubridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Serpentes');
ENTER_NEW_CLASSIFICATION($connect,'Colubridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Elaphe') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Colubridae');
ENTER_NEW_CLASSIFICATION($connect,'Elaphe','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Elaphe guttata') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Elaphe');
ENTER_NEW_CLASSIFICATION($connect,"Elaphe guttata","Sometimes called the Usually 76 ~ 122 cm (29.9 ~ 48 in) in total length. The record is 183 cm (72 in). The scales are smooth or weakly keeled.", $fk, 'SPECIES',"Corn Snake");
}Echo "Entry 21 complete";

//This is input #22

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Serpentes')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Serpentes','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Colubridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Serpentes');
ENTER_NEW_CLASSIFICATION($connect,'Colubridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','m (42.1 ~ 72 in).') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Colubridae');
ENTER_NEW_CLASSIFICATION($connect,'m (42.1 ~ 72 in).','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'ult usually measures 107 ~ 183 cm (42.1 ~ 72 in). (101 in) in total length. The adult usually measures 107 ~ 183 cm (42.1 ~ 72 in).') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'm (42.1 ~ 72 in).');
ENTER_NEW_CLASSIFICATION($connect,"ult usually measures 107 ~ 183 cm (42.1 ~ 72 in). (101 in) in total length. The adult usually measures 107 ~ 183 cm (42.1 ~ 72 in).","The Eastern Rat Snake is a variable species in terms of its color and pattern. There are three color phases or subspecies in Georgia ~ the Black Rat Snake Elaphe obsoleta obsoleta, the Yellow Rat Snake Elaphe obsoleta quadrivittata, and the Gray Rat Snake Elaphe obsoleta spiloides. Juveniles are blotched in all subspecies, but adult color differs. The Black Rat Snake is uniformly black. (Some individuals retain traces of the blotched juvenile pattern.) The belly is an irregular black and white checkerboard pattern with extensive black smudging in the white areas. The Yellow Rat Snake is uniform greenish to greenish yellow, with four dark brown or black longitudinal stripes. The belly is cream to yellowish and mottled with gray. An adult Gray Rat Snake retains the blotched juvenile pattern. The background color can vary from dark to very light gray or pale brown. Blotches can be brown or gray varying from pale to very dark. This species is one of the longest snakes in the United States. The record is 256.5 cm (101 in) in total length. The adult usually measures 107 ~ 183 cm (42.1 ~ 72 in).", $fk, 'SPECIES',"Rat Snake");
}Echo "Entry 22 complete";

//This is input #23

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Serpentes')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Serpentes','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Colubridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Serpentes');
ENTER_NEW_CLASSIFICATION($connect,'Colubridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Farancia') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Colubridae');
ENTER_NEW_CLASSIFICATION($connect,'Farancia','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Farancia abacura') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Farancia');
ENTER_NEW_CLASSIFICATION($connect,"Farancia abacura","Glossy black or blue black on the back. Red to pink on the belly, with prominent black markings two to three scales wide. The belly color extends up the sides of the body to form bars of red or pink. Adults average from 102 ~ 137 cm (40.2 ~ 53.9 in) in total length. The record is 207 cm (81.5 in). The Mud Snake is smooth scaled. The tip of the Mud Snake's tail has a pointed, hardened scale which is used to prod prey into position so the snake can swallow it. This pointed scale has earned the Mud Snake the nicknames of 'Horn Snake' and 'Stinging Snake.", $fk, 'SPECIES',"Mud Snake");
}Echo "Entry 23 complete";

//This is input #24

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Serpentes')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Serpentes','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Colubridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Serpentes');
ENTER_NEW_CLASSIFICATION($connect,'Colubridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Farancia') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Colubridae');
ENTER_NEW_CLASSIFICATION($connect,'Farancia','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Farancia erytrogramma') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Farancia');
ENTER_NEW_CLASSIFICATION($connect,"Farancia erytrogramma","These smooth scaled, glossy snakes are iridescent in appearance. The back is blue ~black with three red stripes. The belly is red or pink with two or three rows of black spots with yellow margins. Adults average 68 ~ 122 cm (26.8 ~ 48 in) in total length. The record is 173 cm (68.1 in). Females are stouter and grow larger than do males. The Rainbow Snake has a sharp, pointed scale at the tip of its tail.", $fk, 'SPECIES',"Rainbow Snake");
}Echo "Entry 24 complete";

//This is input #25

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Serpentes')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Serpentes','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Colubridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Serpentes');
ENTER_NEW_CLASSIFICATION($connect,'Colubridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Heterodon') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Colubridae');
ENTER_NEW_CLASSIFICATION($connect,'Heterodon','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Heterodon platirhinos') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Heterodon');
ENTER_NEW_CLASSIFICATION($connect,"Heterodon platirhinos","Variety of ground colors including yellow, brown, gray, olive, and reddish. The back has a series of dorsal blotches of dark brown or black. Some individuals may not have any pattern at all and be plain black or gray. The belly is mottled with gray or greenish on a yellow, light gray, or pinkish background. The underside of the tail is lighter than the belly color. A stocky, medium~sized snake. Average adult size ranges from 51 ~ 84 cm (20.1 ~ 33.1 in). The Eastern Hognose Snake gets its common name from the specialized upturned scale at the tip of the snout which is used for burrowing in loose soil or sand.", $fk, 'SPECIES',"Eastern Hognose Snake");
}Echo "Entry 25 complete";

//This is input #26

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Serpentes')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Serpentes','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Colubridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Serpentes');
ENTER_NEW_CLASSIFICATION($connect,'Colubridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Nerodia') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Colubridae');
ENTER_NEW_CLASSIFICATION($connect,'Nerodia','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Nerodia erythrogaster') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Nerodia');
ENTER_NEW_CLASSIFICATION($connect,"Nerodia erythrogaster","The Plainbelly Water Snake is our only water snake with an unpatterned belly. Depending on geographic location the belly can be either yellow, orange~red, or red. Back and sides can be gray, greenish gray, or reddish brown to chocolate brown. The young are strongly patterned with large dark brown dorsal blotches and alternating blotches or spots on the sides, on a ground color of pinkish brown. This color pattern is lost or fades as the young reach adult size. Average length is from 76 ~ 122 cm (29.9 ~ 48 in), with females being larger than males. The scales are keeled and the anal scale is divided.", $fk, 'SPECIES',"Plain~bellied Water Snake");
}Echo "Entry 26 complete";

//This is input #27

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Squamata')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Squamata','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Elapidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Squamata');
ENTER_NEW_CLASSIFICATION($connect,'Elapidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Micrurus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Elapidae');
ENTER_NEW_CLASSIFICATION($connect,'Micrurus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Micrurus fulvius') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Micrurus');
ENTER_NEW_CLASSIFICATION($connect,"Micrurus fulvius","Entirely banded in red, black, and yellow, the bands continuing onto the belly. The red bands are generally spotted with black. The average adult Eastern Coral Snake ranges in size from 51 ~ 76 cm (20.1 ~ 29.9 in) in length. The Eastern Coral Snake is a moderately slender snake. The eyes are small and the scales are smooth.", $fk, 'SPECIES',"Eastern Coral Snake");
}Echo "Entry 27 complete";

//This is input #28

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Squamata')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Squamata','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Viperidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Squamata');
ENTER_NEW_CLASSIFICATION($connect,'Viperidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Agkistrodon') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Viperidae');
ENTER_NEW_CLASSIFICATION($connect,'Agkistrodon','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Agkistrodon contortrix') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Agkistrodon');
ENTER_NEW_CLASSIFICATION($connect,"Agkistrodon contortrix","The Copperhead can vary in color from grayish~brown to light brown or even pinkish. It has 10 ~ 20 hourglass~shaped dark crossbands which are chestnut brown or reddish brown to brown. The head can vary from gray to brown to reddish. The belly can be light brown, pinkish, or cream, with black, brown, or dark gray blotches. Average adults range in length from 610 ~ 900 mm (24 ~ 36 in). This is a stout~bodied snake. The scales are weakly keeled. As in all pitvipers there is a pit on each side of the head between the nostril and the eye.", $fk, 'SPECIES',"Copperhead");
}Echo "Entry 28 complete";

//This is input #29

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Serpentes')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Serpentes','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Viperidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Serpentes');
ENTER_NEW_CLASSIFICATION($connect,'Viperidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Crotalus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Viperidae');
ENTER_NEW_CLASSIFICATION($connect,'Crotalus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Crotalus horridus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Crotalus');
ENTER_NEW_CLASSIFICATION($connect,"Crotalus horridus","The Timber Rattlesnake of the Southeast has a ground color of brown, black, yellow, or pinkish. The back has a series of 20 ~ 29 brown or black blotches and crossbands, and a reddish brown middorsal stripe. The rear portion of the body and the tail are velvety black. A large, stout~bodied snake adult Timber Rattlesnakes average from 900 ~ 1,520 mm (36 ~ 60 in) in length.", $fk, 'SPECIES',"
Timber Rattlesnake");
}Echo "Entry 29 complete";

//This is input #30

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Testudines')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Testudines','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Cheloniidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Testudines');
ENTER_NEW_CLASSIFICATION($connect,'Cheloniidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Caretta') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Cheloniidae');
ENTER_NEW_CLASSIFICATION($connect,'Caretta','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Caretta caretta') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Caretta');
ENTER_NEW_CLASSIFICATION($connect,"Caretta caretta","The brown or reddish brown color is the easiest aid in identifying Loggerheads (see Similar Species). This is the largest hard~shelled turtle in the world, exceeded in size only by the Leatherback Sea Turtle. The record carapace length for a Loggerhead is 2.13 m (83.1 in) but the average is 85 ~ 100 cm (33 ~ 39 in). The average weight is from 77 ~ 159 kg (170 ~ 350 lbs), but the maximum recorded weight for this species is 545 kg (1199 lbs). This species is the most frequently encountered marine turtle along the coast of eastern North America.", $fk, 'SPECIES',"Loggerhead Sea Turtle");
}Echo "Entry 30 complete";

//This is input #31

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Testudines')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Testudines','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Chelydridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Testudines');
ENTER_NEW_CLASSIFICATION($connect,'Chelydridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Chelydra') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Chelydridae');
ENTER_NEW_CLASSIFICATION($connect,'Chelydra','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Chelydra serpentina') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Chelydra');
ENTER_NEW_CLASSIFICATION($connect,"Chelydra serpentina","The carapace can be tan, black, or dark brown. Adults average from 203 ~ 360 mm (8 ~ 14 in) in carapace length and weigh from 4.5 ~ 16 kg (10 ~ 35 lbs). The record for carapace length is 494 mm (19.3 in) and for weight is 34 kg (75 lbs). This is a large freshwater turtle with a long tail and neck, a small plastron, and three rows of low carapace keels.", $fk, 'SPECIES',"Common Snapping Turtle");
}Echo "Entry 31 complete";

//This is input #32

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Testudines')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Testudines','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Dermochelyidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Testudines');
ENTER_NEW_CLASSIFICATION($connect,'Dermochelyidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Dermochelys') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Dermochelyidae');
ENTER_NEW_CLASSIFICATION($connect,'Dermochelys','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Dermochelys coriacea') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Dermochelys');
ENTER_NEW_CLASSIFICATION($connect,"Dermochelys coriacea","The shell is covered by a smooth, leathery skin which is either slate black, bluish black, or black, with scattered small white to yellowish blotches. The skin of the head, neck, and limbs is black, brown, or dark green with scattered small white, yellowish, or pinkish blotches. The belly is mostly white. The Leatherback is the largest living turtle in the world. Adults average from 1.35 ~ 1.780 m (53 ~ 70 in) in carapace length and weigh from 295 ~ 544 kg (650 ~ 1,200 lbs). The record for carapace length is 2.44 m (96 in), and the record weight is 916 kg (2,016 lbs). The front limbs are modified into very large flippers and the smaller hind limbs are paddle~like.", $fk, 'SPECIES',"Leatherback Sea Turtle");
}Echo "Entry 32 complete";

//This is input #33

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Testudines')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Testudines','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Emydidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Testudines');
ENTER_NEW_CLASSIFICATION($connect,'Emydidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Terrapene') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Emydidae');
ENTER_NEW_CLASSIFICATION($connect,'Terrapene','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Terrapene carolina') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Terrapene');
ENTER_NEW_CLASSIFICATION($connect,"Terrapene carolina","The carapace is brown with highly variable pattern of yellow or orangish markings. The plastron is tan to dark brown, with or without pattern. The skin ranges from brown to black with variable markings. The iris of the eye is red in adult males and yellowish brown in females. Adults range from 11.5 ~ 15 cm (4.5 ~ 5.9 in) in shell length. The largest on record was 19.8 cm (7.8 in). The Eastern Box Turtle is probably one of our most familiar terrestrial turtles. The high~domed carapace and the hinged plastron are characteristic of the Box Turtle.", $fk, 'SPECIES',"Eastern Box Turtle");
}Echo "Entry 33 complete";

//This is input #34

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Testudines')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Testudines','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Emydidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Testudines');
ENTER_NEW_CLASSIFICATION($connect,'Emydidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Trachemys') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Emydidae');
ENTER_NEW_CLASSIFICATION($connect,'Trachemys','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Trachemys scripta') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Trachemys');
ENTER_NEW_CLASSIFICATION($connect,"Trachemys scripta","The carapace is brown to olive in color with yellow vertical bands. The plastron is yellow with black spots in two or more scutes. A yellow blotch behind the eye is the most conspicuous marking on the head of young and females, being darker in adult males. Old adults may be completely black in color and exhibit no pattern. Adults average from 12.5 ~ 20.3 cm (4.9 ~ 8 in) in carapace length. The Slider was formerly the most commonly sold turtle in the pet trade, but its sale has been restricted since it is a known carrier of Salmonella bacteria which cause intestinal disorders.", $fk, 'SPECIES',"Pond Slider");
}Echo "Entry 34 complete";

//This is input #35

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Testudines')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Testudines','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Kinosternidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Testudines');
ENTER_NEW_CLASSIFICATION($connect,'Kinosternidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Kinosternon') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Kinosternidae');
ENTER_NEW_CLASSIFICATION($connect,'Kinosternon','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Kinosternon subrubrum') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Kinosternon');
ENTER_NEW_CLASSIFICATION($connect,"Kinosternon subrubrum","The shell can be black, olive, brown, or yellowish. The skin is brown, and the plastron is brown or yellowish. This is a small freshwater turtle. Adult Eastern Mud Turtles average from 7 ~ 10 cm (2.8 ~ 3.9 in) in carapace length. The plastron has both a front and rear hinge.", $fk, 'SPECIES',"Eastern Mud Turtle");
}Echo "Entry 35 complete";

//This is input #36

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Testudines')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Testudines','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Testudinidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Testudines');
ENTER_NEW_CLASSIFICATION($connect,'Testudinidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Gopherus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Testudinidae');
ENTER_NEW_CLASSIFICATION($connect,'Gopherus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Gopherus polyphemus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Gopherus');
ENTER_NEW_CLASSIFICATION($connect,"Gopherus polyphemus","The carapace varies in color from dark brown to grayish~black. The plastron is yellowish. The exposed skin of the head, neck, and legs is grayish black. The largest terrestrial turtle of the southeastern United States. Adults average 15 ~ 24 cm (5.9 ~ 9.4 in) in length. The record is 38 cm (15 in). This turtle has shovel~like front legs, stumpy hind legs, and an unhinged plastron.", $fk, 'SPECIES',"Gopher Tortoise");
}Echo "Entry 36 complete";

//This is input #37

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Reptilia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Reptilia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Testudines')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Reptilia');
ENTER_NEW_CLASSIFICATION($connect, 'Testudines','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Trionychidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Testudines');
ENTER_NEW_CLASSIFICATION($connect,'Trionychidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Apalone') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Trionychidae');
ENTER_NEW_CLASSIFICATION($connect,'Apalone','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Apalone spinifera') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Apalone');
ENTER_NEW_CLASSIFICATION($connect,"Apalone spinifera","Carapace is olive to greenish brown. Adults of the Spiny Softshell average from 125 ~ 432 mm (5 ~ 17 in) in carapace length. males are smaller than females, not over 235 mm (9.25 in) in carapace length. The leathery carapace is flattened and lacks the scutes of other turtles. The leading edge of the carapace is covered with spine~like tubercles. The head and snout are elongated, and the snout is tube~like in appearance.", $fk, 'SPECIES',"Spiny Softshell");
}Echo "Entry 37 complete";

//This is input #38

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Artiodactyla')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Artiodactyla','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Bovidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Artiodactyla');
ENTER_NEW_CLASSIFICATION($connect,'Bovidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Bos') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Bovidae');
ENTER_NEW_CLASSIFICATION($connect,'Bos','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Bos bison') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Bos');
ENTER_NEW_CLASSIFICATION($connect,"Bos bison","Rusty tan to almost black. This is the largest, most massive native land mammal of North America. The adult male bison can attain a maximum of 3.8 m (12.5 ft) in total length, stand 1.8 m (5.9 ft) at the shoulder, and weigh 1,000 kg (2204.6 lbs). Females on average are approximately 40% smaller. This large, cow~like hooved mammal has a distinct hump at the shoulder. Its head, neck, shoulders and forelegs are covered in long shaggy hair. The head is short and heavy, with short, black, curved horns. The tail is short and the tip is covered in a tuft of hair.", $fk, 'SPECIES',"American Bison");
}Echo "Entry 38 complete";

//This is input #39

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Artiodactyla')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Artiodactyla','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Cervidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Artiodactyla');
ENTER_NEW_CLASSIFICATION($connect,'Cervidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Odocoileus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Cervidae');
ENTER_NEW_CLASSIFICATION($connect,'Odocoileus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Odocoileus virginianus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Odocoileus');
ENTER_NEW_CLASSIFICATION($connect,"Odocoileus virginianus","The body color is reddish brown in summer and grayish brown in winter. The belly, chest, throat, chin, and the inside of the back legs are white. The tail is brown above and white below, hence the name. This is the smallest member of the deer family in North America. Depending on geographic location, the White~tailed Deer ranges in size from 1.3 ~ 2.1 m (4.3 ~ 6.9 ft) in total length and weighs from 40 ~ 125 kg (88.2 ~ 275.6 lbs). The tail is held erect and waved back and forth when alarmed. Males have antlers with one main beam on each side. The beam sweeps up and forward without forking, with 3 ~ 6 tines, or with points projecting upward from each antler beam", $fk, 'SPECIES',"White~tailed Deer");
}Echo "Entry 39 complete";

//This is input #40

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Artiodactyla')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Artiodactyla','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Suidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Artiodactyla');
ENTER_NEW_CLASSIFICATION($connect,'Suidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Sus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Suidae');
ENTER_NEW_CLASSIFICATION($connect,'Sus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Sus scrofa') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Sus');
ENTER_NEW_CLASSIFICATION($connect,"Sus scrofa","Hair color is variable from brown to black. Body size ranges from 1.1 ~ 1.5 m (3.6 ~ 4.9 ft) in total length, with a height of 0.9 m (3 ft) at the shoulder. These animals weigh as much as 181.4 kg (400 lbs). The body shape of the Wild Pig is similar to that of domestic pigs, with a few differences which make them distinct. The Wild Pig is generally thinner, has coarser hair, and has longer canine teeth, called tusks, than domestic pigs do.", $fk, 'SPECIES',"Wild Pig");
}Echo "Entry 40 complete";

//This is input #41

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Carnivora')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Carnivora','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Canidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Carnivora');
ENTER_NEW_CLASSIFICATION($connect,'Canidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Canis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Canidae');
ENTER_NEW_CLASSIFICATION($connect,'Canis','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Canis latrans') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Canis');
ENTER_NEW_CLASSIFICATION($connect,"Canis latrans","The fur is buff or gray, with long, black~tipped hairs on the back and sides, and whitish, cream, or pale gray with yellowish tint on the belly. The face is can be gray or reddish brown. Coyotes range in size from 1 ~ 1.3 m (3.3 ~ 4.3 ft) in total length and weigh 9 ~ 16 kg (19.8 ~ 35.3 lbs). Coyotes have long legs and muzzles, a bushy tail, and long, pointed ears.", $fk, 'SPECIES',"Coyote");
}Echo "Entry 41 complete";

//This is input #42

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Carnivora')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Carnivora','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Canidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Carnivora');
ENTER_NEW_CLASSIFICATION($connect,'Canidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Canis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Canidae');
ENTER_NEW_CLASSIFICATION($connect,'Canis','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Canis lupus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Canis');
ENTER_NEW_CLASSIFICATION($connect,"Canis lupus","The fur is long and variable in color, from pure white, mottled gray and brown, to black, but usually grizzled gray. There is a dark spot above the base of the tail. This is the largest of the wild dogs of North America. Length is up to 1.8 m (6 ft) from the tip of the nose to the tip of the tail. Weight is up to 72.6 kg (160 lbs). none", $fk, 'SPECIES',"Gray Wolf");
}Echo "Entry 42 complete";

//This is input #43

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Carnivora')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Carnivora','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Canidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Carnivora');
ENTER_NEW_CLASSIFICATION($connect,'Canidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Urocyon') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Canidae');
ENTER_NEW_CLASSIFICATION($connect,'Urocyon','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Urocyon cinereoargenteus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Urocyon');
ENTER_NEW_CLASSIFICATION($connect,"Urocyon cinereoargenteus","The short coarse fur is predominantly gray in color, with patches of reddish fur on the sides of the neck, flanks, legs, and underside of tail; undersides are buff in color. A black stripe runs along animal's back down to the tail tip, which is always black. Smaller than the Red Fox, adult Gray Foxes are 85 ~ 102 cm (33.5 ~ 40.2 in) in total length and weigh up to 4.8 kg (10.5 lbs). The long, narrow muzzle is set off by the large triangular ea", $fk, 'SPECIES',"Gray Fox");
}Echo "Entry 43 complete";

//This is input #44

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Carnivora')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Carnivora','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Canidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Carnivora');
ENTER_NEW_CLASSIFICATION($connect,'Canidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Vulpes') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Canidae');
ENTER_NEW_CLASSIFICATION($connect,'Vulpes','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Vulpes vulpes') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Vulpes');
ENTER_NEW_CLASSIFICATION($connect,"Vulpes vulpes","The head and upper body are generally a deep reddish brown to yellowish red, but black and silver color phases also occur. The long bushy tail is tipped with white and the feet, legs, underside of tail, and ear edges are black. The Red Fox ranges from 90 ~ 114 cm (35.4 ~ 44.9 in) in total length and weighs 2.7 ~ 7.7 kg (6 ~ 17 lbs). none", $fk, 'SPECIES',"Red Fox");
}Echo "Entry 44 complete";

//This is input #45

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Carnivora')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Carnivora','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Felidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Carnivora');
ENTER_NEW_CLASSIFICATION($connect,'Felidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Lynx') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Felidae');
ENTER_NEW_CLASSIFICATION($connect,'Lynx','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Lynx rufus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Lynx');
ENTER_NEW_CLASSIFICATION($connect,"Lynx rufus","Fur color varies from grayish to reddish brown, streaked and/or spotted with black. Ears and tip of the very short tail are black. Belly fur is white with black spots. This species is medium sized, from 61 ~ 101.6 cm (24 ~ 40 in) in total length and weighing from 4.5 ~ 11.4 kg (9.9 ~ 25.1 lbs). A Bobcat's legs are long in proportion to its body size. The Bobcat is the most abundant wild cat in the United States, and the species of wild cat most likely to be seen in the wild.", $fk, 'SPECIES',"Bobcat");
}Echo "Entry 45 complete";

//This is input #46

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Carnivora')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Carnivora','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Felidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Carnivora');
ENTER_NEW_CLASSIFICATION($connect,'Felidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Puma') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Felidae');
ENTER_NEW_CLASSIFICATION($connect,'Puma','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Puma concolor') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Puma');
ENTER_NEW_CLASSIFICATION($connect,"Puma concolor","Tawny. Sides of the muzzle, backs of ears, and tip of tail are black. Belly fur is buff or nearly white in color. Young are spotted and have a ringed tail until six months of age. This is the largest of the wild cats in North America. Total length ranges from 2.1 ~ 2.7 m (7 ~ 9 ft), and weight ranges from 36.3 ~ 90.7 kg (80 ~ 200 lbs). The tail is usually 61 ~ 91.4 cm (2~3 ft) long. This is a large, unspotted, long~tailed cat.", $fk, 'SPECIES',"Mountain Lion");
}Echo "Entry 46 complete";

//This is input #47

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Carnivora')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Carnivora','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Mephitidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Carnivora');
ENTER_NEW_CLASSIFICATION($connect,'Mephitidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Mephitis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Mephitidae');
ENTER_NEW_CLASSIFICATION($connect,'Mephitis','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Mephitis mephitis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Mephitis');
ENTER_NEW_CLASSIFICATION($connect,"Mephitis mephitis","The Striped Skunk is covered in long black fur, except for a white stripe from the tip of the nose to the forehead, and a white patch on top of the head that extends to the shoulders, then divides into two stripes down the length of the back. The tail is black, tipped with white hairs. The Striped Skunk is about the size of a domestic house cat, measuring 53.3 ~ 71.1 cm (21 ~ 28 in) in total length and weighing from 1.4 ~ 5 kg (3 ~ 11 lbs). The Striped Skunk is most well known for its chemical warfare in defense against predators. The strong~smelling musk is produced in two glands on either side of the anus. The musk is sprayed by voluntary contraction of muscles. This musk can be expelled as either a fine mist or as droplets for distances up to 3.7 m (12 ft). Musk glands contain enough musk for 5 ~ 6 sprays and refill within a week. Exposure to the musk may cause nausea, swelling of the nose lining, and eye irritation.", $fk, 'SPECIES',"Striped Skunk");
}Echo "Entry 47 complete";

//This is input #48

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Carnivora')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Carnivora','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Mustelidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Carnivora');
ENTER_NEW_CLASSIFICATION($connect,'Mustelidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Lontra') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Mustelidae');
ENTER_NEW_CLASSIFICATION($connect,'Lontra','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Lontra canadensis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Lontra');
ENTER_NEW_CLASSIFICATION($connect,"Lontra canadensis","The short, dense fur is dark brown, with the face, chin, and throat having a grayish sheen. Adults are 0.9 ~ 1.2 m (3 ~ 4 ft) in total length and weigh 5 ~ 10.4 kg (11 ~ 23 lbs). The River Otter is long and cylindrical in body shape. It has short legs and a short, thick neck. The snout is short and broad. The ears are small, and the tail is long and thick at the base. The feet are webbed.", $fk, 'SPECIES',"Northern River Otter");
}Echo "Entry 48 complete";

//This is input #49

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Carnivora')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Carnivora','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Procyonidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Carnivora');
ENTER_NEW_CLASSIFICATION($connect,'Procyonidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Procyon') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Procyonidae');
ENTER_NEW_CLASSIFICATION($connect,'Procyon','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Procyon lotor') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Procyon');
ENTER_NEW_CLASSIFICATION($connect,"Procyon lotor","The fur is grizzled in appearance, varying from grayish to blackish. (Cinnamon and albino forms sometimes occur.) The belly is usually gray with long white guard hairs. The triangular ears are tipped with white, and they set off the white face and pointed muzzle with its black mask. Adults range from 71.1 ~ 83.8 cm (28 ~ 33 in) in total length and weigh from 5.4 ~ 11.8 kg (12 ~ 26 lbs). The Raccoon is a short~legged, stocky, medium~sized carnivore. The characteristic ringed tail and the 'bandit~like' black facial mask make the Raccoon one of the most easily identified mammals in North America.", $fk, 'SPECIES',"Northern Raccoon");
}Echo "Entry 49 complete";

//This is input #50

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Carnivora')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Carnivora','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Ursidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Carnivora');
ENTER_NEW_CLASSIFICATION($connect,'Ursidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Ursus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Ursidae');
ENTER_NEW_CLASSIFICATION($connect,'Ursus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Ursus americanus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Ursus');
ENTER_NEW_CLASSIFICATION($connect,"Ursus americanus","The Black Bear has short, thick, glossy fur which is most often a bluish black. Some individuals can be brown or cinnamon in color. This is the smallest of the American bears, but it is the largest carnivore in eastern North America. An adult Black Bear is 1.5 ~ 1.8 m (5 ~ 6 ft) tall, measures 0.6 ~ 0.9 m (2 ~ 3 ft) wide at the shoulder, and weighs 90.7 ~ 226.8 kg (200 ~ 500 lbs). Large heavy body and long legs with flat feet and stout claws; a very short tail. The Black Bear is not generally aggressive toward people. However, bears should never be fed or approached for they are large, powerful animals and can be unpredictable.", $fk, 'SPECIES',"American Black Bear");
}Echo "Entry 50 complete";

//This is input #51

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Cetacea')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Cetacea','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Balaenidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Cetacea');
ENTER_NEW_CLASSIFICATION($connect,'Balaenidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Eubalaena') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Balaenidae');
ENTER_NEW_CLASSIFICATION($connect,'Eubalaena','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Eubalaena glacialis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Eubalaena');
ENTER_NEW_CLASSIFICATION($connect,"Eubalaena glacialis","The body is dark brown to black in color, with white patches in the mid~belly and on the chin. Baleen plates black to dark brown. Adults attain lengths ranging from 12.2 ~ 17.4 m (40 ~ 57 ft) and weigh 36.3 ~ 45.4 metric tons (40 ~ 50 tons). Other things to look for~ This is a baleen whale. All baleen whales lack teeth, and instead have a baleen, a series of overlapping, long, fibrous~edged plate~like strips which hang from the roof of the mouth. The baleen acts like a sieve and captures food as water is expelled by the whale's tongue. Right whales have about 250 pairs of black to dark brown baleen plates which may reach up to 1.8 m (6 ft) in length The head is enormous and makes up one~fourth of the total length of the whale. The mouth is highly arched, curving upward in front of the eyes on the either side of the head. The pectoral fins are short, broad, and rounded.", $fk, 'SPECIES',"Right Whale");
}Echo "Entry 51 complete";

//This is input #52

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Cetacea')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Cetacea','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Delphinidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Cetacea');
ENTER_NEW_CLASSIFICATION($connect,'Delphinidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Globicephala') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Delphinidae');
ENTER_NEW_CLASSIFICATION($connect,'Globicephala','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Globicephala macrorhynchus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Globicephala');
ENTER_NEW_CLASSIFICATION($connect,"Globicephala macrorhynchus","Frequently a patch of gray on chin and belly. Also called the Blackfish because the flesh of this whale is entirely black. A medium sized, toothed whale ranging from 4 ~ 7 m (13 ~ 23 ft) in length. The calf is 2.4 ~ 2.7 m (8 ~ 9 ft) in length at birth. The head is bulbous and globe~like in shape. The pectoral fins are rather short, and the dorsal fin is large.", $fk, 'SPECIES',"Short~finned Pilot Whale");
}Echo "Entry 52 complete";

//This is input #53

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Cetacea')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Cetacea','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Delphinidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Cetacea');
ENTER_NEW_CLASSIFICATION($connect,'Delphinidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Tursiops') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Delphinidae');
ENTER_NEW_CLASSIFICATION($connect,'Tursiops','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Tursiops truncatus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Tursiops');
ENTER_NEW_CLASSIFICATION($connect,"Tursiops truncatus","Color Light to purplish gray on upper parts of body. Sides pale gray, belly white. Adults range in size from 2.4 ~ 3.7 m (8 ~ 12 ft) in total length. Bottlenose Dolphins are probably the most familiar of all cetaceans to the general public, since most people have seen them on television programs and commercials, or at aquariums, zoos, and marine park", $fk, 'SPECIES',"Bottlenose Dolphin");
}Echo "Entry 53 complete";

//This is input #54

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Cetacea')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Cetacea','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Kogiidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Cetacea');
ENTER_NEW_CLASSIFICATION($connect,'Kogiidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Kogia') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Kogiidae');
ENTER_NEW_CLASSIFICATION($connect,'Kogia','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Kogia breviceps') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Kogia');
ENTER_NEW_CLASSIFICATION($connect,"Kogia breviceps","The back is dark steel gray grading to lighter gray on the sides. The lips and under parts are white. There is a pale bracket~shaped mark behind the eye. A small toothed whale ranging in total length from 2 ~ 4 m (6.7 ~ 13.1 ft) and weighing more than 300 kg (661 lb.). At birth, calves range in size from 1.2 ~ 1.7 m (3.9 ~ 5.7 ft) in length and weigh as much as 54 ~ 79.8 kg (119 ~ 176 lb.). The dorsal fin is small and located to the rear of the midpoint of the back.", $fk, 'SPECIES',"Pygmy Sperm Whale");
}Echo "Entry 54 complete";

//This is input #55

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Chiroptera')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Chiroptera','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Molossidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Chiroptera');
ENTER_NEW_CLASSIFICATION($connect,'Molossidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Tadarida') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Molossidae');
ENTER_NEW_CLASSIFICATION($connect,'Tadarida','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Tadarida brasiliensis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Tadarida');
ENTER_NEW_CLASSIFICATION($connect,"Tadarida brasiliensis","The short, velvety fur is brownish gray. Some individuals may have patches of white fur anywhere on the body. Body, 8.8 ~ 10.3 cm (3.5 ~ 4.1 in) in total length. As the name implies, the posterior portion of the tail extends beyond the membrane that connects between the tail and hind legs. Hair on the feet extends well beyond the tips of the claws.", $fk, 'SPECIES',"Brazilian Free~tailed Bat");
}Echo "Entry 55 complete";

//This is input #56

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Chiroptera')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Chiroptera','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Vespertilionidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Chiroptera');
ENTER_NEW_CLASSIFICATION($connect,'Vespertilionidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Corynorhinus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Vespertilionidae');
ENTER_NEW_CLASSIFICATION($connect,'Corynorhinus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Corynorhinus rafinesquii') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Corynorhinus');
ENTER_NEW_CLASSIFICATION($connect,"Corynorhinus rafinesquii","Individual hairs of the fur are bicolored with black bases, the tips of the hairs being grayish brown on the dorsum and nearly white on the venter. This medium~sized bat ranges from 9.5 ~ 10.5 cm (3.7 ~ 4.1 in) in total length. The very long ears, over 2.54 cm (1 in) in length and joined in the middle, are the most distinctive characteristic of this species. Two large, conspicuous glands are present on either side of the snout, and form prominent lumps on the top of the nose.", $fk, 'SPECIES',"Rafinesque's Big~eared Bat");
}Echo "Entry 56 complete";

//This is input #57

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Chiroptera')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Chiroptera','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Vespertilionidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Chiroptera');
ENTER_NEW_CLASSIFICATION($connect,'Vespertilionidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Eptesicus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Vespertilionidae');
ENTER_NEW_CLASSIFICATION($connect,'Eptesicus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Eptesicus fuscus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Eptesicus');
ENTER_NEW_CLASSIFICATION($connect,"Eptesicus fuscus","The long, glossy fur is chocolate~brown on the back and sides and paler on the belly. Relatively large for an American bat, measuring 10.3 ~ 13 cm (4.1 ~ 5.1 in) in total length. The flight membranes are thick and black. This bat has broad black ears.", $fk, 'SPECIES',"Big Brown Bat");
}Echo "Entry 57 complete";

//This is input #58

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Chiroptera')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Chiroptera','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Vespertilionidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Chiroptera');
ENTER_NEW_CLASSIFICATION($connect,'Vespertilionidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Lasiurus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Vespertilionidae');
ENTER_NEW_CLASSIFICATION($connect,'Lasiurus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Lasiurus borealis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Lasiurus');
ENTER_NEW_CLASSIFICATION($connect,"Lasiurus borealis","The Red Bat varies from brick to rusty red The Red Bat is 10.8 ~ 12.5 cm (4.3 ~ 4.9 in) in total length. These bats have thickly furred tail membranes.", $fk, 'SPECIES',"Eastern Red Bat");
}Echo "Entry 58 complete";

//This is input #59

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Chiroptera')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Chiroptera','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Vespertilionidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Chiroptera');
ENTER_NEW_CLASSIFICATION($connect,'Vespertilionidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Lasiurus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Vespertilionidae');
ENTER_NEW_CLASSIFICATION($connect,'Lasiurus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Lasiurus cinereus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Lasiurus');
ENTER_NEW_CLASSIFICATION($connect,"Lasiurus cinereus","The Hoary Bat has a silvery white, frosted appearance to its fur. The Hoary Bat also has a yellow throat patch. The Hoary Bat is the largest tree bat of the southeastern United States, ranging from 13 ~ 15 cm (5.1 ~ 5.9 in) in total length. These bats have thickly furred tail membranes.", $fk, 'SPECIES',"Hoary Bat");
}Echo "Entry 59 complete";

//This is input #60

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Chiroptera')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Chiroptera','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Vespertilionidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Chiroptera');
ENTER_NEW_CLASSIFICATION($connect,'Vespertilionidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Lasiurus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Vespertilionidae');
ENTER_NEW_CLASSIFICATION($connect,'Lasiurus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Lasiurus intermedius') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Lasiurus');
ENTER_NEW_CLASSIFICATION($connect,"Lasiurus intermedius","Yellowish orange to yellowish brown. This bat measures from 11.8 ~ 12.9 cm (4.6 ~ 5.1 in) in total length. Females are larger than males. Examine the tail membrane; this bat has fur only on the anterior (forward) half of the dorsal surface.", $fk, 'SPECIES',"Northern Yellow Bat");
}Echo "Entry 60 complete";

//This is input #61

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Chiroptera')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Chiroptera','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Vespertilionidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Chiroptera');
ENTER_NEW_CLASSIFICATION($connect,'Vespertilionidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Lasiurus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Vespertilionidae');
ENTER_NEW_CLASSIFICATION($connect,'Lasiurus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Lasiurus seminolus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Lasiurus');
ENTER_NEW_CLASSIFICATION($connect,"Lasiurus seminolus","The fur of the Seminole Bat is a rich mahogany brown with hairs tipped with white. The female is somewhat paler in color than the male. Total length in this species ranges from 8.8 ~ 12.1 cm (3.5 ~ 4.8 in). The female is slightly larger than the male. The tail membrane is fully furred. Ears are short and somewhat rounded.", $fk, 'SPECIES',"Seminole Bat");
}Echo "Entry 61 complete";

//This is input #62

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Chiroptera')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Chiroptera','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Vespertilionidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Chiroptera');
ENTER_NEW_CLASSIFICATION($connect,'Vespertilionidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Myotis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Vespertilionidae');
ENTER_NEW_CLASSIFICATION($connect,'Myotis','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Myotis austroriparius') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Myotis');
ENTER_NEW_CLASSIFICATION($connect,"Myotis austroriparius","Dark yellowish or grayish brown to gray These small to medium~sized bats ranges from 8 ~ 9.5 cm (3.1 ~ 3.7 in) in total length. The tragus, a projection which extends from the base of the inside of the external ear, is long and pointed rather than blunt and rounded. All of the Mouse~eared Bats have simple unmodified snouts, and a tail that reaches the end of the membrane from the hind legs. This membrane is never thickly furred. Many of the Mouse~eared Bat species are difficult to tell apart from one another, even in a museum", $fk, 'SPECIES',"Southeastern Myotis");
}Echo "Entry 62 complete";

//This is input #63

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Chiroptera')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Chiroptera','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Vespertilionidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Chiroptera');
ENTER_NEW_CLASSIFICATION($connect,'Vespertilionidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Myotis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Vespertilionidae');
ENTER_NEW_CLASSIFICATION($connect,'Myotis','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Myotis grisescens') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Myotis');
ENTER_NEW_CLASSIFICATION($connect,"Myotis grisescens","Dark yellowish or grayish brown to gray These small to medium~sized bats ranges from 8 ~ 9.5 cm (3.1 ~ 3.7 in) in total length. The tragus, a projection which extends from the base of the inside of the external ear, is long and pointed rather than blunt and rounded. All of the Mouse~eared Bats have simple unmodified snouts, and a tail that reaches the end of the membrane from the hind legs. This membrane is never thickly furred. Many of the Mouse~eared Bat species are difficult to tell apart from one another, even in a museum.", $fk, 'SPECIES',"Gray Myotis");
}Echo "Entry 63 complete";

//This is input #64

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Chiroptera')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Chiroptera','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Vespertilionidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Chiroptera');
ENTER_NEW_CLASSIFICATION($connect,'Vespertilionidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Myotis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Vespertilionidae');
ENTER_NEW_CLASSIFICATION($connect,'Myotis','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Myotis leibii') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Myotis');
ENTER_NEW_CLASSIFICATION($connect,"Myotis leibii","Dark yellowish or grayish brown to gray, depending on species. These small to medium~sized bats ranges from 8 ~ 9.5 cm (3.1 ~ 3.7 in) in total length. The tragus, a projection which extends from the base of the inside of the external ear, is long and pointed rather than blunt and rounded. All of the Mouse~eared Bats have simple unmodified snouts, and a tail that reaches the end of the membrane from the hind legs. This membrane is never thickly furred. Many of the Mouse~eared Bat species are difficult to tell apart from one another, even in a museum.", $fk, 'SPECIES',"Eastern Small~footed Myotis");
}Echo "Entry 64 complete";

//This is input #65

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Chiroptera')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Chiroptera','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Vespertilionidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Chiroptera');
ENTER_NEW_CLASSIFICATION($connect,'Vespertilionidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Myotis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Vespertilionidae');
ENTER_NEW_CLASSIFICATION($connect,'Myotis','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Myotis lucifugus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Myotis');
ENTER_NEW_CLASSIFICATION($connect,"Myotis lucifugus","Dark yellowish or grayish brown to gray, depending on species. These small to medium~sized bats ranges from 8 ~ 9.5 cm (3.1 ~ 3.7 in) in total length. The tragus, a projection which extends from the base of the inside of the external ear, is long and pointed rather than blunt and rounded. All of the Mouse~eared Bats have simple unmodified snouts, and a tail that reaches the end of the membrane from the hind legs. This membrane is never thickly furred. Many of the Mouse~eared Bat species are difficult to tell apart from one another, even in a museum", $fk, 'SPECIES',"Little Brown Myotis");
}Echo "Entry 65 complete";

//This is input #66

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Chiroptera')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Chiroptera','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Vespertilionidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Chiroptera');
ENTER_NEW_CLASSIFICATION($connect,'Vespertilionidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Myotis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Vespertilionidae');
ENTER_NEW_CLASSIFICATION($connect,'Myotis','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Myotis septentrionalis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Myotis');
ENTER_NEW_CLASSIFICATION($connect,"Myotis septentrionalis","Dark yellowish or grayish brown to gray These small to medium~sized bats ranges from 8 ~ 9.5 cm (3.1 ~ 3.7 in) in total length. The tragus, a projection which extends from the base of the inside of the external ear, is long and pointed rather than blunt and rounded. All of the Mouse~eared Bats have simple unmodified snouts, and a tail that reaches the end of the membrane from the hind legs. This membrane is never thickly furred. Many of the Mouse~eared Bat species are difficult to tell apart from one another, even in a museum.", $fk, 'SPECIES',"Northern Long~eared Myotis");
}Echo "Entry 66 complete";

//This is input #67

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Chiroptera')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Chiroptera','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Vespertilionidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Chiroptera');
ENTER_NEW_CLASSIFICATION($connect,'Vespertilionidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Myotis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Vespertilionidae');
ENTER_NEW_CLASSIFICATION($connect,'Myotis','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Myotis sodalis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Myotis');
ENTER_NEW_CLASSIFICATION($connect,"Myotis sodalis","Dark yellowish or grayish brown to gray These small to medium~sized bats ranges from 8 ~ 9.5 cm (3.1 ~ 3.7 in) in total length. The tragus, a projection which extends from the base of the inside of the external ear, is long and pointed rather than blunt and rounded. All of the Mouse~eared Bats have simple unmodified snouts, and a tail that reaches the end of the membrane from the hind legs. This membrane is never thickly furred. Many of the Mouse~eared Bat species are difficult to tell apart from one another, even in a museum.", $fk, 'SPECIES',"Indiana Myotis");
}Echo "Entry 67 complete";

//This is input #68

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Chiroptera')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Chiroptera','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Vespertilionidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Chiroptera');
ENTER_NEW_CLASSIFICATION($connect,'Vespertilionidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Nycticeius') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Vespertilionidae');
ENTER_NEW_CLASSIFICATION($connect,'Nycticeius','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Nycticeius humeralis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Nycticeius');
ENTER_NEW_CLASSIFICATION($connect,"Nycticeius humeralis","The short, sparse hair is medium to dark brown. Evening Bats average 87 mm (3.4 in) in total length. A nondescript bat that is often confused with the Big Brown Bat, Eptesicus fuscus and members of the common genus Myotis, or Mouse~eared Bats.", $fk, 'SPECIES',"Evening Bat");
}Echo "Entry 68 complete";

//This is input #69

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Chiroptera')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Chiroptera','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Vespertilionidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Chiroptera');
ENTER_NEW_CLASSIFICATION($connect,'Vespertilionidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Pipistrellus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Vespertilionidae');
ENTER_NEW_CLASSIFICATION($connect,'Pipistrellus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Pipistrellus subflavus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Pipistrellus');
ENTER_NEW_CLASSIFICATION($connect,"Pipistrellus subflavus","The overall appearance is generally a yellowish brown color, the belly being a lighter shade. The fur is actually tricolored. Each hair has a dark brown base, a lighter middle, and a dark tip. One of the smallest bats in North America, with a total length ranging from 7.1 ~ 9.5 cm (2.8 ~ 3.74 in). Note the tragus, a projection that arises from the base of the inside of the external ear and is used for echolocation. In the Pipistrelle bats it is blunt, not long and pointed.", $fk, 'SPECIES',"Eastern Pipistrelle");
}Echo "Entry 69 complete";

//This is input #70

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Didelphimorphia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Didelphimorphia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Didelphidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Didelphimorphia');
ENTER_NEW_CLASSIFICATION($connect,'Didelphidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Didelphis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Didelphidae');
ENTER_NEW_CLASSIFICATION($connect,'Didelphis','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Didelphis virginiana') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Didelphis');
ENTER_NEW_CLASSIFICATION($connect,"Didelphis virginiana","The coarse, grizzled fur is generally grayish but can vary from white to brown to black. The head and body are 38 ~ 51 cm (15 ~ 20 in) long. Weight, 4 ~ 6 kg (8.8 ~ 13.2 lb). The unmistakable Opossum is generally about the size of a plump house cat, with a long, naked prehensile (grasping) tail, a white face with a pointed snout, and naked leaf~like ears. Opossum feet are shaped somewhat like human hands, with an opposable thumb on the hind feet. This is North America's only marsupial", $fk, 'SPECIES',"Virginia Opossum");
}Echo "Entry 70 complete";

//This is input #71

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Insectivora')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Insectivora','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Soricidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Insectivora');
ENTER_NEW_CLASSIFICATION($connect,'Soricidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Blarina') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Soricidae');
ENTER_NEW_CLASSIFICATION($connect,'Blarina','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Blarina brevicauda') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Blarina');
ENTER_NEW_CLASSIFICATION($connect,"Blarina brevicauda","This shrew is covered with short, dense, velvety fur which is grayish to grayish black. The belly is slightly paler. Adult Northern Short~tailed Shrews are 9.5 ~ 13.6 cm (3.74 ~ 5.4 in) in total length. The body is cylindrical. The snout is pointed. Eyes and ears are very small, the ears being hidden by fur.", $fk, 'SPECIES',"Northern Short~tailed Shrew");
}Echo "Entry 71 complete";

//This is input #72

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Insectivora')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Insectivora','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Soricidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Insectivora');
ENTER_NEW_CLASSIFICATION($connect,'Soricidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Blarina') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Soricidae');
ENTER_NEW_CLASSIFICATION($connect,'Blarina','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Blarina carolinensis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Blarina');
ENTER_NEW_CLASSIFICATION($connect,"Blarina carolinensis","This shrew is covered with short, dense, velvety fur which is grayish to grayish black. The belly is slightly paler. Southern Short~tailed Shrews are somewhat smaller, 7.9 ~ 12.3 cm (3.1 ~ 4.8 in). The body is cylindrical. The snout is pointed. Eyes and ears are very small, the ears being hidden by fur. A unique character of Short~tailed Shrews is the pair of glands on the flanks and rump which secrete a strong odor.", $fk, 'SPECIES',"Southern Short~tailed Shrew");
}Echo "Entry 72 complete";

//This is input #73

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Insectivora')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Insectivora','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Soricidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Insectivora');
ENTER_NEW_CLASSIFICATION($connect,'Soricidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Cryptotis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Soricidae');
ENTER_NEW_CLASSIFICATION($connect,'Cryptotis','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Cryptotis parva') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Cryptotis');
ENTER_NEW_CLASSIFICATION($connect,"Cryptotis parva","The back and sides vary from dark brown to reddish brown in winter and are lighter in color in the summer months. The belly is grayish. Total length for this shrew ranges from 7.2 ~ 9 cm (2.8 ~ 3.5 in). The Least Shrew can be distinguished by the combination of its extremely short tail, small size, and cinnamon color.", $fk, 'SPECIES',"Least Shrew");
}Echo "Entry 73 complete";

//This is input #74

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Insectivora')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Insectivora','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Talpidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Insectivora');
ENTER_NEW_CLASSIFICATION($connect,'Talpidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Scalopus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Talpidae');
ENTER_NEW_CLASSIFICATION($connect,'Scalopus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Scalopus aquaticus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Scalopus');
ENTER_NEW_CLASSIFICATION($connect,"Scalopus aquaticus","Their fur is short, silky, and silvery~gray to grayish brown or brownish black in color. Eastern moles are 14.4 ~ 18.7 cm (5.7 ~ 7.4 in) in total length. They have large front feet, with palms that face towards the rear and are as wide as long. Their tail is short and stubby. They have a hairless cone shaped muzzle, eyes that are very small and covered by thin skin, and no external ears.", $fk, 'SPECIES',"Eastern Mole");
}Echo "Entry 74 complete";

//This is input #75

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Lagomorpha')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Lagomorpha','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Leporidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Lagomorpha');
ENTER_NEW_CLASSIFICATION($connect,'Leporidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Sylvilagus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Leporidae');
ENTER_NEW_CLASSIFICATION($connect,'Sylvilagus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Sylvilagus floridanus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Sylvilagus');
ENTER_NEW_CLASSIFICATION($connect,"Sylvilagus floridanus","The long, soft fur is rusty brown in the summer and grayish brown in winter, with black guard hairs. The belly and tail are white, and the nape of the neck is rusty~red. The Eastern Cottontail is a moderately sized rabbit, measuring from 36 ~ 43 cm (14.2 ~ 16.9 in) in total length and weighing 0.9 ~ 1.8 kg (2 ~ 4 lbs). Like all rabbits, the Eastern Cottontail has short front legs and long hind legs.", $fk, 'SPECIES',"Eastern Cottontail");
}Echo "Entry 75 complete";

//This is input #76

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Lagomorpha')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Lagomorpha','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Leporidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Lagomorpha');
ENTER_NEW_CLASSIFICATION($connect,'Leporidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Sylvilagus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Leporidae');
ENTER_NEW_CLASSIFICATION($connect,'Sylvilagus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Sylvilagus palustris') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Sylvilagus');
ENTER_NEW_CLASSIFICATION($connect,"Sylvilagus palustris","Fur is reddish brown to blackish brown. The venter is grayish brown to buff. The tail is dingy gray to bluish gray. Total length ranges from 40 ~ 45 cm (15.7 ~ 17.7 in). The ears of the Marsh Rabbit are noticeably shorter than those of the Eastern Cottontail.", $fk, 'SPECIES',"Marsh Rabbit");
}Echo "Entry 76 complete";

//This is input #77

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Rodentia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Rodentia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Castoridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Rodentia');
ENTER_NEW_CLASSIFICATION($connect,'Castoridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Castor') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Castoridae');
ENTER_NEW_CLASSIFICATION($connect,'Castor','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Castor canadensis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Castor');
ENTER_NEW_CLASSIFICATION($connect,"Castor canadensis","Fur on the upper parts is a rich reddish brown in the winter and darker in the summer. The belly is a pale buff gray. This is the largest rodent in North America, with an average length of 0.9 ~ 1.2 m (3 ~ 4 ft) and a weight of 13.6 ~ 31.8 kg (30 ~ 70 lbs). Beavers are stocky in body shape, with short legs and webbed hind feet. The naked tail is very wide, flat, and scaly.", $fk, 'SPECIES',"American Beaver");
}Echo "Entry 77 complete";

//This is input #78

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Rodentia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Rodentia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Geomyidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Rodentia');
ENTER_NEW_CLASSIFICATION($connect,'Geomyidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Geomys') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Geomyidae');
ENTER_NEW_CLASSIFICATION($connect,'Geomys','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Geomys pinetis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Geomys');
ENTER_NEW_CLASSIFICATION($connect,"Geomys pinetis","The body is covered in short hair, which is medium to dark brown on the upper parts and brownish gray on the belly. Total length is from 25.4 ~ 30.5 cm (10 ~ 12 in). The Southeastern Pocket Gopher has a thickset body, stout front legs with large claws, external fur~lined cheek pouches, and a hairless tail. The small eyes and ears are adaptations for a fossorial", $fk, 'SPECIES',"Southeastern Pocket Gopher");
}Echo "Entry 78 complete";

//This is input #79

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Rodentia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Rodentia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Muridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Rodentia');
ENTER_NEW_CLASSIFICATION($connect,'Muridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Neofiber') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Muridae');
ENTER_NEW_CLASSIFICATION($connect,'Neofiber','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Neofiber alleni') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Neofiber');
ENTER_NEW_CLASSIFICATION($connect,"Neofiber alleni","The coarse guard hairs (outer fur) are dark brown and glossy. The dense underfur is a rich brown at the tip on the back and shifts to gray at the base, pale buff belly. Resembles a small muskrat, from 381 ~ 546 mm (15 ~ 21.5 in) in total length. The tail is round instead of flattened on the sides like muskrats.", $fk, 'SPECIES',"Round~tailed Muskrat");
}Echo "Entry 79 complete";

//This is input #80

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Rodentia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Rodentia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Muridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Rodentia');
ENTER_NEW_CLASSIFICATION($connect,'Muridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Neotoma') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Muridae');
ENTER_NEW_CLASSIFICATION($connect,'Neotoma','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Neotoma floridana') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Neotoma');
ENTER_NEW_CLASSIFICATION($connect,"Neotoma floridana","Grayish brown fur on the back, lighter fur on the sides. White throat, belly, and feet. Hair~covered tail, black above and white below. The Eastern Wood Rat is a large rodent, 36 ~ 43 cm (14.2 ~ 16.9 in) in length. The Eastern Wood Rat has large rounded ears and bulging black eyes.", $fk, 'SPECIES',"Eastern Woodrat");
}Echo "Entry 80 complete";

//This is input #81

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Rodentia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Rodentia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Muridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Rodentia');
ENTER_NEW_CLASSIFICATION($connect,'Muridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Oryzomys') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Muridae');
ENTER_NEW_CLASSIFICATION($connect,'Oryzomys','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Oryzomys palustris') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Oryzomys');
ENTER_NEW_CLASSIFICATION($connect,"Oryzomys palustris","This is the darkest mouse in the southeastern United States. The fur is dark brown on the animal's back, being darkest down the middle of the back and lighter on the sides. The belly and feet are white. This is the largest member of the genus Peromyscus. It reaches a total length of 18 ~ 20 cm (7.1 ~ 7.9 in). none", $fk, 'SPECIES',"Golden mouse");
}Echo "Entry 81 complete";

//This is input #82

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Rodentia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Rodentia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Muridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Rodentia');
ENTER_NEW_CLASSIFICATION($connect,'Muridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Peromyscus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Muridae');
ENTER_NEW_CLASSIFICATION($connect,'Peromyscus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Peromyscus leucopus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Peromyscus');
ENTER_NEW_CLASSIFICATION($connect,"Peromyscus leucopus","Pale to rich reddish brown fur on the back and sides. Creamy white to grayish white on the belly, which is distinctly marked off from the upper parts. Summer fur color is more grayish than the winter color. The fur~covered tail is dusky brown above and creamy below. A medium ~ sized mouse, from 15 ~ 20 cm (5.9 ~ 7.9 in) in total length. The tail is fur~covered, and usually shorter than the combined length of the head and body. The large ears are sparsely covered in hair.", $fk, 'SPECIES',"White~footed Mouse");
}Echo "Entry 82 complete";

//This is input #83

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Rodentia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Rodentia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Muridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Rodentia');
ENTER_NEW_CLASSIFICATION($connect,'Muridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Reithrodontomys') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Muridae');
ENTER_NEW_CLASSIFICATION($connect,'Reithrodontomys','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Reithrodontomys humulis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Reithrodontomys');
ENTER_NEW_CLASSIFICATION($connect,"Reithrodontomys humulis","A brownish gray to rich brown mouse with a grayish white belly. Tail is gray above and white below. Total length ranges from 10 ~ 15 cm (3.9 ~ 5.9 in). Ears are rather large. Tail is longer than 2.5 cm (1 in) but shorter than combined length of head and body. There is a vertical groove running down the front of each upper incisor. (This groove is the basis for the genus name.)", $fk, 'SPECIES',"Eastern Harvest Mouse");
}Echo "Entry 83 complete";

//This is input #84

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Rodentia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Rodentia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Muridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Rodentia');
ENTER_NEW_CLASSIFICATION($connect,'Muridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Sigmodon') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Muridae');
ENTER_NEW_CLASSIFICATION($connect,'Sigmodon','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Sigmodon hispidus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Sigmodon');
ENTER_NEW_CLASSIFICATION($connect,"Sigmodon hispidus","Coarse, yellowish ~ brown fur intermixed with stiff, black guard hairs. The belly is grayish~white to buffy. Feet are black. A stocky, medium~sized rat with a total length of 20 ~ 34 cm (7.9 ~ 13.4 in). The tail, thinly haired and scaly~looking, is shorter than the combined length of the head and body.", $fk, 'SPECIES',"Hispid Cotton Rat");
}Echo "Entry 84 complete";

//This is input #85

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Rodentia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Rodentia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Myocastoridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Rodentia');
ENTER_NEW_CLASSIFICATION($connect,'Myocastoridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Myocastor') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Myocastoridae');
ENTER_NEW_CLASSIFICATION($connect,'Myocastor','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Myocastor coypus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Myocastor');
ENTER_NEW_CLASSIFICATION($connect,"Myocastor coypus","Dark, slate gray under~fur overlaid with long, glossy, dark brown or yellowish brown guard hairs. This large rodent can reach a total length of 0.9 m (3 ft) and weigh up to 15.9 kg (35 lbs). General size and shape of a Beaver but with a long, round, sparsely haired tail.", $fk, 'SPECIES',"Nutria");
}Echo "Entry 85 complete";

//This is input #86

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Rodentia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Rodentia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Sciuridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Rodentia');
ENTER_NEW_CLASSIFICATION($connect,'Sciuridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Glaucomys') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Sciuridae');
ENTER_NEW_CLASSIFICATION($connect,'Glaucomys','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Glaucomys volans') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Glaucomys');
ENTER_NEW_CLASSIFICATION($connect,"Glaucomys volans","The fine, silky fur is gray in color on the back and white on the belly. The tail is gray above and pinkish cinnamon below. Adults range in size from 21 ~ 25 cm (8.3 ~ 9.8 in) in total length. The Southern Flying Squirrel has large, black eyes, prominent ears, and a bushy, flattened tail. It has a loose fold of skin that connects the forelimbs to the hindlimbs from wrist to ankle. This fold of skin, called a 'patagium,' serves as the gliding membrane when the limbs are fully extended.", $fk, 'SPECIES',"Southern Flying Squirrel");
}Echo "Entry 86 complete";

//This is input #87

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Rodentia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Rodentia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Sciuridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Rodentia');
ENTER_NEW_CLASSIFICATION($connect,'Sciuridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Marmota') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Sciuridae');
ENTER_NEW_CLASSIFICATION($connect,'Marmota','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Marmota monax') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Marmota');
ENTER_NEW_CLASSIFICATION($connect,"Marmota monax","The coarse fur is brown to yellowish brown, with gray~ or yellow~tipped guard hairs that give the animal a frosted appearance. The feet are dark brown or black. The Woodchuck is the largest member of the squirrel family in Georgia, averaging 61 cm (24 in) in total length and weighing up to 4.5 kg (10 lbs). The Woodchuck has a stocky, low~slung body, a broad head, and a relatively short bushy tail. Its ears are small, rounded, and inconspicuous.", $fk, 'SPECIES',"Woodchuck");
}Echo "Entry 87 complete";

//This is input #88

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Rodentia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Rodentia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Sciuridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Rodentia');
ENTER_NEW_CLASSIFICATION($connect,'Sciuridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Sciurus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Sciuridae');
ENTER_NEW_CLASSIFICATION($connect,'Sciurus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Sciurus carolinensis') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Sciurus');
ENTER_NEW_CLASSIFICATION($connect,"Sciurus carolinensis","Uniformly gray above. White on the belly. Tail bordered with white~tipped hairs. Total length, 40.6 ~ 50.8 cm (16 ~ 20 in). A tree~dweller with a very bushy tail. In the summer months, one sometimes may see a Gray Squirrel which looks hairless. This condition is caused by a mite infestation called mange.", $fk, 'SPECIES',"Eastern Gray Squirrel");
}Echo "Entry 88 complete";

//This is input #89

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Rodentia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Rodentia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Sciuridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Rodentia');
ENTER_NEW_CLASSIFICATION($connect,'Sciuridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Sciurus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Sciuridae');
ENTER_NEW_CLASSIFICATION($connect,'Sciurus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Sciurus niger') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Sciurus');
ENTER_NEW_CLASSIFICATION($connect,"Sciurus niger","Quite variable. Usually rusty yellow with a pale yellow to orange belly. May be variously colored with mixtures of yellow, white and black, with black face, white nose and ears, and a whitish or buff belly. Sometimes solid black (called melanistic), or gray suffused with black. The largest of Georgia's arboreal squirrels, the Fox Squirrel averages from 63.5 ~ 81.3 cm (25 ~ 32 in) in total length. A long, bushy tail bordered with tawny~tipped hairs.", $fk, 'SPECIES',"Eastern Fox Squirrel");
}Echo "Entry 89 complete";

//This is input #90

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Rodentia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Rodentia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Sciuridae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Rodentia');
ENTER_NEW_CLASSIFICATION($connect,'Sciuridae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Tamias') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Sciuridae');
ENTER_NEW_CLASSIFICATION($connect,'Tamias','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Tamias striatus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Tamias');
ENTER_NEW_CLASSIFICATION($connect,"Tamias striatus","The fur on the back is reddish brown, with 5 conspicuous black stripes that run down the back and sides and end at a reddish rump. The belly and sides are buff to white, and the tail is blackish above and rusty below. Stripes on the face distinguish this species from all other mammals over most of its range. The Eastern Chipmunk is 20.3 ~ 25.4 cm (8 ~ 10 in) in total length including its tail, which is just 7.6 ~ 10.2 cm (3 ~ 4 in) long. This is a small, ground~dwelling squirrel whose sharp chattering chuck~chuck~chuck is often heard before the animal is seen. Ears are short, rounded, and held erect. The short, bushy tail is held straight up when the animal runs.", $fk, 'SPECIES',"Eastern Chipmunk");
}Echo "Entry 90 complete";

//This is input #91

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Sirenia')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Sirenia','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Trichechidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Sirenia');
ENTER_NEW_CLASSIFICATION($connect,'Trichechidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Trichechus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Trichechidae');
ENTER_NEW_CLASSIFICATION($connect,'Trichechus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Trichechus manatus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Trichechus');
ENTER_NEW_CLASSIFICATION($connect,"Trichechus manatus","Uniformly grayish. Adults are 2.4 ~ 4.3 m (8 ~ 14 ft) in total length and weigh 272 ~ 1134 kg (600 ~ 2,500 lbs). These large, plump aquatic mammals are shaped somewhat like torpedos. The body is nearly hairless. There is no visible neck, front limbs are paddle~like, and the horizontal tail is broadly rounded. The small head is set off by a broad, square muzzle covered in thick bristles. The Manatee does not have a dorsal fin.", $fk, 'SPECIES',"Manatee");
}Echo "Entry 91 complete";

//This is input #92

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Mammalia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Mammalia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Xenarthra')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Mammalia');
ENTER_NEW_CLASSIFICATION($connect, 'Xenarthra','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Dasypodidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Xenarthra');
ENTER_NEW_CLASSIFICATION($connect,'Dasypodidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Dasypus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Dasypodidae');
ENTER_NEW_CLASSIFICATION($connect,'Dasypus','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Dasypus novemcinctus') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Dasypus');
ENTER_NEW_CLASSIFICATION($connect,"Dasypus novemcinctus","Ears, tail base, neck, legs, and belly are covered in a sparse yellowish white hair. Horny 'armor' is brownish. About the size of an Opossum or a House Cat, 62 ~ 80 cm (24.2 ~ 31.2 in) in total length. This mammal is covered in bony plates, called scutes, that serve as protection against predators. This body armor hangs down on each side of the body, and is divided into flexible bands across the animal's back. Body shape is oval and brownish in color, with a long tapering tail which is also covered in scutes. The head is long and slender, with a pointed snout and large ears. The teeth are simple pegs. The front feet have large, thick, sharp claws which are used for burrowing and digging up food.", $fk, 'SPECIES',"Nine~banded Armadillo");
}Echo "Entry 92 complete";

//This is input #93

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Amphibia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Amphibia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Anura')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Amphibia');
ENTER_NEW_CLASSIFICATION($connect, 'Anura','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Ranidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Anura');
ENTER_NEW_CLASSIFICATION($connect,'Ranidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Rana') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Ranidae');
ENTER_NEW_CLASSIFICATION($connect,'Rana','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Rana catesbeiana') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Rana');
ENTER_NEW_CLASSIFICATION($connect,"Rana catesbeiana","The head, body, and front legs can be green, olive, or brown with small or large indistinct dark spots or blotches. The back legs are darkly banded; the belly and throat are white or yellow with gray mottling. The Bullfrog is the largest frog in the United States. Adult Bullfrogs average from 90 ~ 152 mm (3.5 ~ 6 in) in total length, but the record Bullfrog was 203 mm (8 in) in length.", $fk, 'SPECIES',"Bullfrog");
}Echo "Entry 93 complete";

//This is input #94

if(GET_CLASSIFICATION_ID($connect,'PHYLUM','Chordata') == -1)//checking);
ENTER_NEW_CLASSIFICATION ($connect, 'Chordata', 'This is a phylum', -1,'PHYLUM');//entry)

if(GET_CLASSIFICATION_ID($connect, 'CLASS', 'Amphibia') == -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'PHYLUM' ,'Chordata');
ENTER_NEW_CLASSIFICATION ($connect, 'Amphibia', 'This is a Class', $fk,'CLASS');//entry
}

if(GET_CLASSIFICATION_ID($connect,'ORD','Anura')== -1){//checking
$fk = GET_CLASSIFICATION_ID($connect, 'CLASS' ,'Amphibia');
ENTER_NEW_CLASSIFICATION($connect, 'Anura','This is a order', $fk, 'ORD');
}

if(GET_CLASSIFICATION_ID($connect, 'FAMILY', 'Ranidae') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'ORD', 'Anura');
ENTER_NEW_CLASSIFICATION($connect,'Ranidae','This is a family', $fk, 'FAMILY');
}

if(GET_CLASSIFICATION_ID($connect, 'GENUS','Rana') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'FAMILY','Ranidae');
ENTER_NEW_CLASSIFICATION($connect,'Rana','This is a genus', $fk, 'GENUS');
}

if(GET_CLASSIFICATION_ID($connect, 'SPECIES', 'Rana grylio') == -1){
$fk = GET_CLASSIFICATION_ID($connect, 'GENUS', 'Rana');
ENTER_NEW_CLASSIFICATION($connect,"Rana grylio","Grayish~green to brownish~black, with dark mottling on its back. The belly is white and may have many dark specks, especially towards the rear. The back of the thigh has an obvious row of lighter spots or a light line. This frog is large, 8.3 ~ 16.2 cm (3 1/4 ~ 6 3/8 in).", $fk, 'SPECIES',"Pig Frog");
}Echo "Entry 94 complete";
?>
<?php
        oci_close($connect);
  ?>
