 
<?php

@require_once ('template/genericView.php');

class ViewMotivation extends GenericView{

    public function __construct(){

    }

    public function generator(){
    	?>

    	<div class="formCV">
    		<form method="POST" action="index.php?module=motivation&action=add">
    			<div class="container identity">
    				<h4>Votre identite</h4>
    				<div class=field>
    					<label>Nom</label>
    					<input type="text" placeholder="Nom" name="name" />
    				</div>

    				<div class=field>
    					<label>Prénom</label>
    					<input type="text" placeholder="Prénom" name="surname"/>
    				</div>

                    <div class=field>
                        <label>Date de naissance</label>
                        <input type="date" name="dateBirth"/>
                    </div>

    				<div class=field>
    					<label>Numéro de tel</label>
    					<input type="text" placeholder="tel" name="phone" />
    				</div>

    				<div class=field>
    					<label>Adresse mail</label>
    					<input type="text" placeholder="Mail" name="mail" />
    				</div>

    				<div class=field>
    					<label>Adresse postal complète</label>
    					<input type="text" placeholder="Adresse" name="adress" />
    				</div>

					<div class=field>
    					<label>Quels sont vos objectifs ?</label>
    					<textarea name="target" ></textarea>
    				</div>

    			</div>

    			<div class="container formation">
    				<h4>Vos formations</h4>

    				<div class="field container_school">
    					<label>Formation n°1</label>

    					<input type="text" placeholder="Titre" name="title-form-1" />

    					<textarea name="text-form-1"></textarea>
    				</div>

    				<div class="field container_school">
    					<label>Formation n°2</label>

    					<input type="text" placeholder="Titre" name="title-form-2"/>

    					<textarea name="text-form-2"></textarea>
    				</div>


    			</div>

    			<div class="container identity">
    				<h4>Vos Experience</h4>

    				<div class="field container_school">
    					<label>Experience n°1</label>

    					<input type="text" placeholder="Titre" name="title-xp-1"/>

    					<textarea name="text-xp-1"></textarea>
    				</div>

    				<div class="field container_school">
    					<label>Experience n°2</label>

    					<input type="text" placeholder="Titre" name="title-xp-2"/>

    					<textarea name="text-xp-2"></textarea>
    				</div>
    			</div>

                <div class="container identity">
                    <h4>Vos Compétences</h4>

                    <div class="field container_school">
                        <textarea name="nomCompetence"></textarea>
                    </div>

                    <div class="field container_school">
                        <textarea name="description"></textarea>


                    </div>
                </div>


    			<div class="container identity">
    				<h4>Vos Centres d'interet</h4>

    				<div class="field container_school">
    					<textarea name="interest"></textarea>
    				</div>
                    <div class="field container_school">
                        <textarea name="descriptionInteret"></textarea>

                        
                    </div>
    			</div>


    			  <div class="container__btn">
    					<input type="submit" class="btn" />
    			</div>

  
    		</form>
    	</div>
    	<?php
    }

}
