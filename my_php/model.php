<?php

function dbConnect($dsn, $user, $password) {
    return new PDO( $dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION] );
}

function getCategories( $db ) {
//    var_dump( $tableName );
//    var_dump( $fieldName );
//    var_dump( $db );
//    $sql = 'USE brand;';
    
//    $sql = 'SELECT :fieldName FROM :tableName;';
    $sql = 'SELECT category_name FROM categories;';
    $stmnt = $db->prepare( $sql );
    
//    $stmnt->bindParam( ':fieldName', $fieldName );
//    $bind1 =  $stmnt->bindValue( ':fieldName', $fieldName );
//    var_dump( $bind1 );
//    $stmnt->bindParam( ':tableName', $tableName );
//    $bind2 = $stmnt->bindValue( ':tableName', $tableName );
//    var_dump($bind2);
//    $stmnt->execute();
    $stmnt->execute();
//    var_dump($exec);
    
//    var_dump( $stmnt->errorInfo() );

    $res = $stmnt->fetchAll( PDO::FETCH_COLUMN, 0 );
//    $res = $stmnt->fetchAll();
//    print_r($res);
    return $res;
}
function getSubCategories( $db, $category) {
//    var_dump( $tableName );
//    var_dump( $fieldName );
//    var_dump( $db );
//    $sql = 'USE brand;';
    
//    $sql = 'SELECT :fieldName FROM :tableName;';
    $sql = 'SELECT brand.categories.category_name,'
            . ' brand.subcategories.subcategory_name'
            . ' FROM brand.subcategories'
            . ' INNER JOIN brand.categories'
            . ' ON brand.subcategories.category_ID = brand.categories.category_ID'
            . ' WHERE brand.categories.category_name = "'
            . $category . '"';
//    var_dump($sql);
    $stmnt = $db->prepare( $sql );
    
//    $stmnt->bindParam( ':fieldName', $fieldName );
//    $bind1 =  $stmnt->bindValue( ':fieldName', $fieldName );
//    var_dump( $bind1 );
//    $stmnt->bindParam( ':tableName', $tableName );
//    $bind2 = $stmnt->bindValue( ':tableName', $tableName );
//    var_dump($bind2);
//    $stmnt->execute();
    $stmnt->execute();
//    var_dump($exec);
    
//    var_dump( $stmnt->errorInfo() );

    $res = $stmnt->fetchAll( PDO::FETCH_COLUMN, 1 );
//    $res = $stmnt->fetchAll();
//    print_r($res);
    return $res;
}
