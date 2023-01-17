<?php

class glowController
{

	public function getAllProduct()
	{
		$furnitures = glow::getAll();
		

		return $furnitures;
	}
	// public function addProduct()
	// {
	// 	if (isset($_POST['submit'])) {
	// 		// Check if any of the form fields are empty
	// 		if (empty($_POST['name']) || empty($_POST['description']) || empty($_POST['prix']) || empty($_FILES['image'])) {
	// 			// Display error message
	// 			echo "All form fields are required. Please fill out the form and try again.";
	// 		} else {
	// 			$data = array(
	// 				'name' => $_POST['name'],
	// 				'prix' => $_POST['prix'],
	// 				'description' => $_POST['description'],
	// 				'statut' => $_POST['statut'],

	// 				'image' => file_get_contents($_FILES['image']['tmp_name']),
					

	// 			);
	// 			$result = glow::add($data);
	// 			if ($result === 'ok') {
	// 				Session::set('success', 'Product Ajouté');
	// 				Redirect::to('dashboard');
	// 				// Form was submitted successfully
	// 			} else {
	// 				echo $result;
	// 			}
	// 		}
	// 	}
	// }

	public function addProduct()
    {
        if (isset($_POST['submit'])) {
            // Check if any of the form fields are empty
            if (empty($_POST['name']) || empty($_POST['description']) || empty($_POST['prix']) || empty($_FILES['image'])) {
                // Display error message
                echo "All form fields are required. Please fill out the form and try again.";
            } else {
                $data = array();
                // loop through the name, description, statut and prix arrays
                foreach ($_POST['name'] as $key => $name) {
                    $data[$key]['name'] = $name;
                    $data[$key]['description'] = $_POST['description'][$key];
                    $data[$key]['statut'] = $_POST['statut'][$key];
                    $data[$key]['prix'] = $_POST['prix'][$key];
                }
                // loop through the image array
                foreach ($_FILES['image']['tmp_name'] as $key => $image) {
                    $data[$key]['image'] = file_get_contents($image);
                }
                $result = glow::add($data);
                if ($result === 'ok') {
                    Session::set('success', 'Product Ajouté');
                    Redirect::to('dashboard');
                    // Form was submitted successfully
                } else {
                    echo $result;
                }
            }
        }
    }

	public function getOneProduct()
	{
		if (isset($_POST['id'])) {
			$data = array(
				'id' => $_POST['id'],
			);
			$furniture = glow::getProduct($data);
			return $furniture;
		}
	}


	public function updateProduct()
	{
		if (isset($_POST['submit'])) {
			$data = array(
				'id' => $_POST['id'],
				'name' => $_POST['name'],
				'prix' => $_POST['prix'],
				'description' => $_POST['description'],
				'statut' => $_POST['statut'],
			);

			// Check if an image was selected
			if (isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])) {
				// Add the image to the data array
				$data['image'] = file_get_contents($_FILES['image']['tmp_name']);
			} else {
				// Get the old image from the database
				$furniture = glow::getProduct($data);
				// Add the old image to the data array
				$data['image'] = $furniture->image;
			}

			$result = glow::update($data);
			if ($result === 'ok') {
				Session::set('success', 'Product Modifier');
				Redirect::to('dashboard');
			} else {
				echo $result;
			}
		}
	}
	public function deleteProduct()
	{
		if (isset($_POST['id'])) {
			$data['id'] = $_POST['id'];
			$result = glow::delete($data);
			if ($result === 'ok') {
				Session::set('success', 'Product Supprimé');
				Redirect::to('dashboard');
			} else {
				echo $result;
			}
		}
	}
}
