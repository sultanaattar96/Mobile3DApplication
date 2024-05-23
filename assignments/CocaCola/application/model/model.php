<?php
class Model {
    private $pdo;
    
    public function __construct() {
    
        $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8;port='.DB_PORT;
		// $dsn = 'mysql:host=' . MY_BB_HOST . ';dbname=' . DB_NAME . ';charset=utf8;' . DB_PORT;
        try {
            $this->pdo = new PDO($dsn, DB_USER, DB_PASS);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection has been failed: " . $e->getMessage());
        }
    }

    public function getData() {
        $sql = "SELECT * FROM CocaContent";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function dbInsertData() {
        $sql = "INSERT INTO CocaContent (Id, modelTitle, method, title, subtitle, description) VALUES (?, ?, ?, ?, ?, ?)";
        $data = [
            [1, NULL, NULL, 'Coca Cola Great Britain', 'Founded in 1886 Dr John S Pemberton', 'The Coca Cola Company is the world\'s leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.'],
            [2, NULL, NULL, 'Coca Cola', 'New York Harbour 1886 Atlanta Beginnings:', 'In 1886, workers in New York Harbor were constructing the Statue of Liberty. Meanwhile, 800 miles away, another great American symbol was about to be unveiled. John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-colored liquid. When it was done, he carried it a few doors down to Jacobs\' Pharmacy. Customers sampled it and all agreed—this new drink was something special. So Jacobs\' Pharmacy put it on sale for five cents [about 3p] a glass.'],
			[3, NULL, NULL, 'Sprite', 'West Germany, 1959', 'First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world\'s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.'],
			[4, NULL, NULL, 'Dr Pepper', 'Texas, 1885', 'Dr Pepper\'s unique, sparkling blend of 23 fruit flavours has been around for well over a century and it\'s still the same, with that distinctive flavour you just can\'t quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. The distinctive, bold taste of Dr Pepper has been popular ever since.'],
			[5, 'Coca Cola X3D Model', 'This X3D model of the coke can has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'History of Coca Cola', 'Atlanta Beginnings', 'It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs\' Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs\' Pharmacy put it on sale for five cents (about 3p) a glass.'],
			[6, 'Sprite X3D Model', 'This X3D model of the sprite bottle has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'Sprite — Fanta Klare Zitrone', 'First introduced in 1961', 'Crisp, refreshing, clean-tasting Sprite is now the world\'s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of Coca Cola\'s no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.'],
			[7, 'Dr Pepper X3D Model', 'This X3D model of the pepper cup has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'Dr Pepper — Liquid Sunshine', '23 fruit flavours', 'Dr Pepper\'s unique, sparkling blend of 23 fruit flavours has been around for well over a century and it\'s still the same, with that distinctive flavour you just can\'t quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. He gave a sample of the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink. The distinctive, bold taste of Dr Pepper has been popular ever since.'],
			[8, NULL, NULL, '3D Images', NULL, 'These 3D images of the Coke can, Sprite bottle and Dr Pepper cup are rendered in 3ds Max 2017 with Mental Ray'],
			[9, NULL, NULL, 'Camera Views', 'These buttons select a range of X3D model viewpoints', NULL],
			[10, NULL, NULL, 'About Coca-Cola Journey', 'Texas, 1885', 'Since the first serving of Coca‑Cola on May 8, 1886, we\'ve grown into a total beverage company, delighting over 2.1 billion people daily across 200+ countries.'],
			[11, NULL, NULL, 'Focusing on a World Without Waste', NULL, 'We aim to collect and recycle a bottle or can for every one we sell and make 100% of our packaging recyclable.'],
			[12, NULL, NULL, 'Coca-cola Orginal Taste', NULL, 'Coca‑Cola Original Taste is the world’s favourite soft drink and has been enjoyed since 1886.'],
			[13, NULL, NULL, 'Sprite', NULL, 'Sprite is a crisp, refreshing and clean-tasting lemon and lime-flavoured soft drink.'],
			[14, NULL, NULL, 'Cocacola', 'History of Celebration', 'Since the first serving of Coca‑Cola on May 8, 1886, we\'ve grown into a total beverage company, delighting over 2.1 billion people daily across 200+ countries. Coca-Cola was invented in the late 19th century and continues to dominate the food and drink industry today as the most popular soft drink in the world. Coca‑Cola Original Taste is the world’s favourite soft drink and has been enjoyed since 1886. The Coca Cola Company is the world\'s leading manufacturer'],
			[15, NULL, NULL, 'Sprite', NULL, 'Sprite is a clear, lemon and lime-flavored soft drink created by the Coca-Cola Company. Sprite comes in multiple flavors, including cranberry, cherry, grape, orange, tropical, ginger, and vanilla.'],
			[16, NULL, NULL, 'Dr Pepper', NULL, 'A unique sparkling blend of 23 fruit flavours, Dr Pepper has that distinctive flavour you just can’t quite put your finger on, or can you?'],
			[17, NULL, NULL, 'Pepsi', NULL, 'Why Craigslist Tampa Is One of The Most Interesting Places On the Web?'],
			[18, NULL, NULL, 'Fizz', NULL, 'Designed to help increase energy levels while temporarily relieving fatigue, promoting alertness and enhancing cognitive performance'],
			[19, NULL, NULL, 'RedBull', NULL, 'The Red Bull Apricot Edition offers the perfect blend of apricot and strawberry bringing out the best of each other'],
			[20, NULL, NULL, 'Limca', NULL, 'Limca is an Indian multinational brand of lemon- and lime-flavoured carbonated soft drink made primarily in India and certain parts of the U.S. It contains 60 calories per 150ml can. The formula does not include fruit, relying instead on artificial flavours.']
        ];

        try {
            $stmt = $this->pdo->prepare($sql);
            foreach ($data as $row) {
                $stmt->execute($row);
            }
            return "X3D model data inserted successfully";
        } catch (PDOException $e) {
            return "An error occurred: " . $e->getMessage();
        }
    }

    public function closeConnection() {
        $this->pdo = null;
    }
	
	
	/*public $dbhandle;
	
	public function __construct()
	{
		$this->dbhandle = new mysqli(MY_BB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
        if ($this->dbhandle->connect_error) {
            die("Database connection failed: " . $this->dbhandle->connect_error);
        }
	}

	public function getData() {
        $sql = "SELECT * FROM CocaContent";
        $stmt = $this->dbhandle->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function closeConnection() {
        $this->dbhandle->close();
    }
	
	
	public function dbGetBrand()
	{
		return array("-", "Coke", "Coke Light","Coke Zero","Sprite", "Dr Pepper", "Fanta");
	}

	public function dbInsertData()
	{
		try {
			$this->dbhandle->query(
			"INSERT INTO CocaContent (Id, modelTitle, method, title, subtitle, description) VALUES
			(1, NULL, NULL, 'Coca Cola Great Britain', 'Founded in 1886 Dr John S Pemberton', 'The Coca Cola Company is the world''s leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.'),
			(2, NULL, NULL, 'Coca Cola', 'New York Harbour 1886 Atlanta Beginnings:', 'In 1886, workers in New York Harbor were constructing the Statue of Liberty. Meanwhile, 800 miles away, another great American symbol was about to be unveiled. John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-colored liquid. When it was done, he carried it a few doors down to Jacobs'' Pharmacy. Customers sampled it and all agreed—this new drink was something special. So Jacobs'' Pharmacy put it on sale for five cents (about 3p) a glass.'),
			(3, NULL, NULL, 'Sprite', 'West Germany, 1959', 'First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world''s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.'),
			(4, NULL, NULL, 'Dr Pepper', 'Texas, 1885', 'Dr Pepper''s unique, sparkling blend of 23 fruit flavours has been around for well over a century and it''s still the same, with that distinctive flavour you just can''t quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. The distinctive, bold taste of Dr Pepper has been popular ever since.'),
			(5, 'Coca Cola X3D Model', 'This X3D model of the coke can has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'History of Coca Cola', 'Atlanta Beginnings', 'It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs'' Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs'' Pharmacy put it on sale for five cents (about 3p) a glass.'),
			(6, 'Sprite X3D Model', 'This X3D model of the sprite bottle has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'Sprite — Fanta Klare Zitrone', 'First introduced in 1961', 'Crisp, refreshing, clean-tasting Sprite is now the world''s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of Coca Cola''s no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.'),
			(7, 'Dr Pepper X3D Model', 'This X3D model of the pepper cup has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'Dr Pepper — Liquid Sunshine', '23 fruit flavours', 'Dr Pepper''s unique, sparkling blend of 23 fruit flavours has been around for well over a century and it''s still the same, with that distinctive flavour you just can''t quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. He gave a sample of the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink. The distinctive, bold taste of Dr Pepper has been popular ever since.'),
			(8, NULL, NULL, '3D Images', NULL, 'These 3D images of the Coke can, Sprite bottle and Dr Pepper cup are rendered in 3ds Max 2017 with Mental Ray'),
			(9, NULL, NULL, 'Camera Views', 'These buttons select a range of X3D model viewpoints', NULL),
			(10, NULL, NULL, 'About Coca-Cola Journey', 'Texas, 1885', 'Since the first serving of Coca‑Cola on May 8, 1886, we''ve grown into a total beverage company, delighting over 2.1 billion people daily across 200+ countries.'),
			(11, NULL, NULL, 'Focusing on a World Without Waste', NULL, 'We aim to collect and recycle a bottle or can for every one we sell and make 100% of our packaging recyclable.'),
			(12, NULL, NULL, 'Coca-cola Orginal Taste', NULL, 'Coca‑Cola Original Taste is the world’s favourite soft drink and has been enjoyed since 1886.'),
			(13, NULL, NULL, 'Sprite', NULL, 'Sprite is a crisp, refreshing and clean-tasting lemon and lime-flavoured soft drink.'),
			(14, NULL, NULL, 'Cocacola', 'History of Celebration', 'Since the first serving of Coca‑Cola on May 8, 1886, we''ve grown into a total beverage company, delighting over 2.1 billion people daily across 200+ countries. Coca-Cola was invented in the late 19th century and continues to dominate the food and drink industry today as the most popular soft drink in the world. Coca‑Cola Original Taste is the world’s favourite soft drink and has been enjoyed since 1886. The Coca Cola Company is the world''s leading manufacturer'),
			(15, NULL, NULL, 'Sprite', NULL, 'Sprite is a clear, lemon and lime-flavored soft drink created by the Coca-Cola Company. Sprite comes in multiple flavors, including cranberry, cherry, grape, orange, tropical, ginger, and vanilla.'),
			(16, NULL, NULL, 'Dr Pepper', NULL, 'A unique sparkling blend of 23 fruit flavours, Dr Pepper has that distinctive flavour you just can’t quite put your finger on, or can you?'),
			(17, NULL, NULL, 'Pepsi', NULL, 'Why Craigslist Tampa Is One of The Most Interesting Places On the Web?'),
			(18, NULL, NULL, 'Fizz', NULL, 'Designed to help increase energy levels while temporarily relieving fatigue, promoting alertness and enhancing cognitive performance'),
			(19, NULL, NULL, 'RedBull', NULL, 'The Red Bull Apricot Edition offers the perfect blend of apricot and strawberry bringing out the best of each other'),
			(20, NULL, NULL, 'Limca', NULL, 'Limca is an Indian multinational brand of lemon- and lime-flavoured carbonated soft drink made primarily in India and certain parts of the U.S. It contains 60 calories per 150ml can. The formula does not include fruit, relying instead on artificial flavours.'),
			(21, NULL, NULL, 'Sprite', NULL, ''),
			(22, NULL, NULL, 'Sprite', NULL, '');");
			return "X3D model data inserted successfully";
		} catch (mysqli_sql_exception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}*/
}
?>