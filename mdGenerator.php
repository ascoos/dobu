<?php
/*
dobu {
    file:id(`example-17330`) {
        ascoos {
            logo {`
                  __ _  ___  ___ ___   ___   ___     ___   ___
                 / _` |/  / / __/ _ \ / _ \ /  /    / _ \ /  /
                | (_| |\  \| (_| (_) | (_) |\  \   | (_) |\  \
                 \__,_|/__/ \___\___/ \___/ /__/    \___/ /__/
            `},
            name {`ASCOOS OS`},
            version {`1.0.0`},
        },
        example {
            class {`TDoBuParser`},
            methods {`parseSections()`},
            source {`mdGenerator.php`},
            category:langs {
                en {`DoBu Parsing Engine`},
                el {`Μηχανή Ανάλυσης DoBu`}
            },
            subcategory:langs {
                en {`Extracting structured metadata from PHP source files`},
                el {`Εξαγωγή δομημένων μεταδεδομένων από PHP αρχεία`}
            },
            summary:langs {
                en {`Demonstrates how the DoBu parser reads PHP files and extracts all DoBu metadata sections.`},
                el {`Παρουσιάζει πώς ο DoBu parser διαβάζει PHP αρχεία και εξάγει όλα τα τμήματα μεταδεδομένων DoBu.`}
            },
            desc:langs {
                en {`This example shows the basic workflow of the DoBu parsing system:
                        - Load the DoBu parser
                        - Read a PHP file containing DoBu blocks
                        - Extract file, class, method and property metadata
                        - Prepare the data for rendering (Markdown, HTML, JSON)`},
                el {`Αυτό το παράδειγμα δείχνει τη βασική ροή του συστήματος ανάλυσης DoBu:
                        - Φόρτωση του DoBu parser
                        - Ανάγνωση PHP αρχείου που περιέχει DoBu blocks
                        - Εξαγωγή μεταδεδομένων αρχείου, κλάσεων, μεθόδων και ιδιοτήτων
                        - Προετοιμασία των δεδομένων για απόδοση (Markdown, HTML, JSON)`}
            },
            author {`Drogidis Christos`},
            since {`1.0.0`},
            sincePHP {`8.4.0`}
        }
    }
}
*/
declare(strict_types=1);

use ASCOOS\OS\Kernel\Parsers\DoBu\TDoBuParser;
use ASCOOS\OS\Kernel\Parsers\DoBu\DoBuMarkdownRenderer; // Dobu Plugin: Markdown Renderer

// 1. We create a parser and renderer
$parser   = new TDoBuParser();
$renderer = new DoBuMarkdownRenderer('el', 'en'); // Dobu Plugin: Markdown Renderer in Greek with fallback in English

// 2. We read the contents of a PHP file
$phpFile = __DIR__ . '/src/classes/example2.php';
$content = file_get_contents($phpFile);

// 3. We get the sections from the parser
$sections = $parser->parseSections($content);

// 4. For each class found in the file
foreach ($sections['classes'] as $className => $classDoc) {

    // 5. We generate Markdown
    $markdown = $renderer->renderClass($classDoc);

    // 6. We save the result
    $outputFile = __DIR__ . "/docs/markdown/class_{$className}.md";
    file_put_contents($outputFile, $markdown);

    echo "<pre>✔ Markdown generated: class_{$className}.md\n</pre>";
}

?>