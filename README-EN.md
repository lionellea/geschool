# GESCHOOL

## INITIALIZATION & CONFIGURATION
   >Connect to the application by entering the identifiers

   >Go to the parameter tab and save the new current school year. <br>
   <span style="color:#337ab7">__N.B__:</span> ___For each new year do this operation.___

   >Go to the tab <span style="color:#337ab7">_"Classes > Add a class "_</span> to save the different classes. <br>
   ___Here it is a question, for example, for the French-speaking section to register 6 classes, from <span style="color:#337ab7">SIL</span> to <span style="color:#337ab7">CM2</span>.___

   >Go to the tab <span style="color:#337ab7">_"Rooms > Add a room"_</span> save the different rooms.<br>
   ___Here for example if you have 2 rooms for the <span style="color:#337ab7">SIL</span> the class will be <span style="color:#337ab7">SIL</span> and both saleles <span style="color:#337ab7">SIL 1</span> and <span style="color:#337ab7">SIL 2</span>. if you have only one SIL</span> for the moment you just put <span style="color:#337ab7">SIL</span>.___

## STUDENT REGISTRATION
   >Go to the tab <span style="color:#337ab7">_"Students > Add a student"_</span> fill in the required information and validate the registration

   >Then go to the tab <span style="color:#337ab7">_"Rooms > Rooms list"_</span> at the room list level select the icon list of registered nons. <br>
   ___This is about registering a student in a classroom___
   
   >Then choose the student you want to register and click on the icon in front of his information to complete the registration.
   > Enter the registration amount and validate 
   > Wait until the receipt is displayed in pdf format and then print the receipt

## INSTALLATION && UPDATE
   1. INSTALLATION<br>
   <!-- Download the project on from the deposit **git** then type the following commands<br> -->
   >* `git clone https://github.com/lionellea/geschool.git`
   >
   >* `compose install`
   >
   >* `php bin/console doctrine:migrations:migrate`

   2. UPDATE<br>
   >* `git pull`
   >
   >* `php bin/console doctrine:migrations:migrate`<br>

## START THE APPLICATION<br>
   >`php bin/console server:start`<br>
   >or<br>
   >`symfony server:start --no-tls`