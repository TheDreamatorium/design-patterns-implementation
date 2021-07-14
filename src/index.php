<!DOCTYPE html>
<html>
    <body>
        <?php 
            //Singleton Test
            require_once('./Singleton/Product.php');
            $milk = Product::getInstance();
            $milk->setId(1);
            $milk->setLabel("Milk");

            $milk2 = Product::getInstance();
        ?>
        <h3>Singleton</h3>
        <p>Product 1 :  <?php echo $milk->getLabel() ?></p>
        <p>Product 2 :  <?php echo $milk2->getLabel() ?></p>

        <?php 
            //Factory Test
            require_once('./Factory/ShapeFactory.php');
            require_once('./Factory/Circle.php');
            require_once('./Factory/Triangle.php');

            $circle = ShapeFactory::create(Circle::class);
            $circle->setRadius(3);
            $circleArea = $circle->calculateArea();

            $triangle = ShapeFactory::create(Triangle::class);
            $triangle->setBase(3);
            $triangle->setHeight(2);
            $triangleArea = $triangle->calculateArea();
        ?>
        <h3>Factory</h3>
        <p>Circle Area : <?php echo $circleArea ?></p>
        <p>Triangle Area : <?php echo $triangleArea ?></p>


        <?php 
            //Strategy Test
            require_once('./Strategy/ExportInterface.php');
            require_once('./Strategy/PdfExporter.php');
            require_once('./Strategy/ExcelExporter.php');
            require_once('./Strategy/Exporter.php');
        
            // First behaviour --> export excel files
            $exporter = new Exporter();
            $exporter->setExportable(new ExcelExporter());
            $excel = $exporter->executeExport();

            //Second behaviour --> export pdf files
            //Change the behaviour with the setter
            $exporter->setExportable(new PdfExporter());
            $pdf = $exporter->executeExport();

        ?>
        <h3>Strategy</h3>
        <p> Export 1 : <?php echo $excel ?></p>
        <p> Export 2 : <?php echo $pdf ?></p>

        <h3>Iterator</h3>
        <?php 
            //Iterator Test
            require_once('./Iterator/Mp3CollectionIterable.php');
            require_once('./Iterator/Mp3Collection.php');
            require_once('./Iterator/Mp3IteratorInterface.php');
            require_once('./Iterator/Mp3ListViewIterator.php');

            $collection = new Mp3Collection();
            $collection->addFile("Man of war");
            $collection->addFile("Karma Police");
            $collection->addFile("Street Spirit");

            $iterator = $collection->createIterator();

            do{
                $index = $iterator->getCurrentPosition() + 1;
                echo "Song {$index} ".$iterator->getCurrentMp3()."<br>";
                $iterator->next();
            }while ($iterator->hasNext())

        ?>
    </body>
</html>