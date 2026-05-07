<?php
/*
dobu {
    file:id(`FILE-ID`),name(`example2`) {
        ascoos {
            logo {`
                  __ _  ___  ___ ___   ___   ___     ___   ___
                 / _` |/  / / __/ _ \ / _ \ /  /    / _ \ /  /
                | (_| |\  \| (_| (_) | (_) |\  \   | (_) |\  \
                 \__,_|/__/ \___\___/ \___/ /__/    \___/ /__/
            `},
            name {`ASCOOS OS`},
            version {`1.0.0`},
            category {`Web OS`},
            subcategory {`Web5 / WebAI`},
            description {`A Web 5.0 and Web AI Kernel for decentralized web and IoT applications`},
            creator {`Drogidis Christos`},
            website {`https://www.ascoos.com`},
            issues {`https://support.ascoos.com`},
            support {`support@ascoos.com`},
            license {`[Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html`},
            copyright {`Copyright (c) 2007 - 2026, AlexSoft Software.`},
        },
        project {
            package:langs {
                en {`Core utilities and foundational components for ASCOOS OS extensions.`},
                el {`Βασικά βοηθητικά στοιχεία και θεμελιώδη συστατικά για επεκτάσεις του ASCOOS OS.`}
            },
            subpackage:langs {
                en {`Example implementations demonstrating DoBu metadata usage.`},
                el {`Παραδείγματα υλοποιήσεων που παρουσιάζουν τη χρήση μεταδεδομένων DoBu.`}
            },
            category:langs {
                en {`Object-oriented architecture`},
                el {`Αντικειμενοστρεφής αρχιτεκτονική`}
            },
            subcategory:langs {
                en {`Class structure, metadata, and documentation patterns`},
                el {`Δομή κλάσεων, μεταδεδομένα και πρότυπα τεκμηρίωσης`}
            },
            source {`example2.php`},
            intro:langs {
                en {`This file demonstrates how DoBu metadata can be applied to a simple ASCOOS OS class.`},
                el {`Αυτό το αρχείο παρουσιάζει πώς εφαρμόζονται τα μεταδεδομένα DoBu σε μια απλή κλάση του ASCOOS OS.`}
            },
            summary:langs {
                en {`Defines a minimal example class with full DoBu metadata for documentation and tooling.`},
                el {`Ορίζει μια ελάχιστη κλάση παραδείγματος με πλήρη μεταδεδομένα DoBu για τεκμηρίωση και εργαλεία.`}
            },
            description:langs {
                en {`This example provides a reference implementation of DoBu metadata for files, classes, and methods. It is intended as a template for developers creating ASCOOS OS components with deterministic documentation structures.`},
                el {`Αυτό το παράδειγμα παρέχει μια ενδεικτική υλοποίηση μεταδεδομένων DoBu για αρχεία, κλάσεις και μεθόδους. Προορίζεται ως πρότυπο για προγραμματιστές που δημιουργούν συστατικά του ASCOOS OS με ντετερμινιστικές δομές τεκμηρίωσης.`}
            },
            fileNo {`FILE-ID`},
            version {`1.0.0`},
            build {`1`},
            created {`2026-05-07 17:10:59`},
            updated {`2026-05-07 17:10:59`},
            author {`AUTHOR NAME`},
            authorSite {`https://www.example.com`},
            support {`support@example.com`},
            license {`Freeware`},
            since {`1.0.0`},
            sincePHP {`8.4.0`}
        }
    }
}
*/
declare(strict_types=1);
namespace ASCOOS\OS\Extras\NAMESPACE;
defined("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");
defined("ASCOOS_OS_RUN") or die("Prohibition of Access.");

use ASCOOS\OS\Kernel\Core\TObject;

/*
dobu {
    class:id(`tmyclass`),name(`TMyClass`),extends(`TObject`)namespace(`ASCOOS\OS\Extras\NAMESPACE`),hierarchy(`TObject, TMyClass`),version(`1.0.0`),build(`1`),created(`2026-05-07 17:14:54`),updated(`2026-05-07 17:14:54`),since(`1.0.0`),sincePHP(`8.4.0`),licence(`Freeware`),difficulty(`1`) {
        category:langs {
            en {`Core example class`},
            el {`Κεντρική κλάση παραδείγματος`}
        },
        intro:langs {
            en {`A minimal demonstration class used to showcase DoBu metadata capabilities.`},
            el {`Μια ελάχιστη κλάση επίδειξης που παρουσιάζει τις δυνατότητες των μεταδεδομένων DoBu.`}
        },
        summary:langs {
            en {`Provides a simple object with constructor and singleton-style instance retrieval.`},
            el {`Παρέχει ένα απλό αντικείμενο με constructor και ανάκτηση παρουσίας τύπου singleton.`}
        },
        desc:langs {
            en {`This class serves as a reference implementation for developers who want to understand how DoBu metadata is applied to ASCOOS OS classes. It includes examples of constructors, instance management, and bilingual documentation fields.`},
            el {`Αυτή η κλάση λειτουργεί ως ενδεικτική υλοποίηση για προγραμματιστές που θέλουν να κατανοήσουν πώς εφαρμόζονται τα μεταδεδομένα DoBu σε κλάσεις του ASCOOS OS. Περιλαμβάνει παραδείγματα constructor, διαχείρισης παρουσίας και δίγλωσσων πεδίων τεκμηρίωσης.`}
        },
        properties:active(`table:{name,access,type,default,langs}`) {
            property:id(`properties`),name(`$properties`),access(`protected`),type(`array`)default(`[]`) {
                langs {
                    en {`An associative array of properties to initialize the class with.`},
                    el {`Ένας συσχετιστικός πίνακας ιδιοτήτων για την αρχικοποίηση της κλάσης.`}
                },
        		keys:active(`dl`) {
                    key:name(`version`),value(`10000`),langs {
                        en {`Class Version`},
                        el {`Έκδοση Κλάσης`}
                    },
                },
            },
        },
        methods:active(`idx,toc`) {
            method:id(`construct`),name(`__construct`),syntax(`__construct(array properties = [])`),return(`void`),langs {
                en {`Initializes the class with an array of optional properties.`},
                el {`Αρχικοποιεί την κλάση με έναν πίνακα από προαιρετικές ιδιότητες.`}
            },
            method:id(`getinstance`),name(`getInstance`),syntax(`&getInstance(array properties = []): TMyClass`),return(`TMyClass&`),langs {
                en {`We see if the object is already loaded, otherwise we create a new load of the object`},
                el {`Βλέπουμε εάν υπάρχει ήδη φορτωμένο το αντικείμενο αλλιώς δημιουργούμε μια νέα φόρτωση του αντικειμένου`}
            }
        },
        examples:type(`inline`) {
            example:type(`pre,code`),pl(`php`),langs {
                all {`$object = new TMyClass(['key' => 'value']);`}
            }
        }
    }
}
*/
#[\AllowDynamicProperties]
class TMyClass extends TObject
{

    /*
    dobu {
        method:classid(`tmyclass`),id(`construct`),name(`__construct`),syntax(`__construct(array $properties = [])`),return(`void`),version(`1.0.0`),build(`1`),created(`2026-05-07 17:16:35`),updated(`2026-05-07 17:16:35`),since(`1.0.0`),sincePHP(`8.4.0`),licence(`Freeware`),difficulty(`1`) {
            category:langs {
                en {`Object initialization`},
                el {`Αρχικοποίηση αντικειμένου`}
            },
            intro:langs {
                en {`Initializes the object and forwards properties to the parent constructor.`},
                el {`Αρχικοποιεί το αντικείμενο και προωθεί τις ιδιότητες στον constructor της γονικής κλάσης.`}
            },
            summary:langs {
                en {`Initializes the class with an array of optional properties.`},
                el {`Αρχικοποιεί την κλάση με έναν πίνακα από προαιρετικές ιδιότητες.`}
            },
            desc:langs {
                en {`This constructor accepts an array of properties and delegates initialization to TObject. It demonstrates how DoBu metadata documents method behavior and return types.`},
                el {`Ο constructor δέχεται έναν πίνακα ιδιοτήτων και αναθέτει την αρχικοποίηση στην TObject. Παρουσιάζει πώς τα μεταδεδομένα DoBu τεκμηριώνουν τη συμπεριφορά και τους τύπους επιστροφής μιας μεθόδου.`}
            },
            params:active(`table:{name,type,langs,default}`) {
                param:id(`$properties`),name(`$properties`),type(`array`),default(`[]`),langs {
                    en {`An associative array of properties to initialize the class with.`},
                    el {`Ένας συσχετιστικός πίνακας ιδιοτήτων για την αρχικοποίηση της κλάσης.`}
                } 
            },
            examples:type(`link`) {
                link(`Example Link`),langs {
                    en {`Description of the example link in English`,
                    el {`Περιγραφή του συνδέσμου παραδείγματος στα Ελληνικά`}
                },
                example:type(`pre,code`),pl(`php`),langs {
                    all {`$object = new TMyClass(['key' => 'value']);`}
                }
            },
            return:type(`void`),langs {
                en {`It doesn't return anything.`},
                el {`Δεν επιστρέφει τίποτα.`}
            },
            throws:types(`none`),langs {
                en {`It does not implement any exceptions.`},
                el {`Δεν υλοποιεί καμία εξαίρεση.`}
            }
        }
    }
    */
    public function __construct(array $properties = [])
    {
        parent::__construct($properties);
    }

    
    /*
    dobu {
        method:classid(`tmyclass`),id(`getinstance`),name(`getInstance`),syntax(`&getInstance(array $properties = []): TMyClass`),return(`TMyClass&`),version(`1.0.0`),build(`1`),created(`2026-05-07 17:21:14`),updated(`2026-05-07 17:21:14`),since(`1.0.0`),sincePHP(`8.4.0`),licence(`Freeware`),difficulty(`1`) {
            category:langs {
                en {`Singleton instance retrieval`},
                el {`Ανάκτηση μοναδικής παρουσίας`}
            },
            intro:langs {
                en {`Returns a reference to the single instance of the class.`},
                el {`Επιστρέφει αναφορά στη μοναδική παρουσία της κλάσης.`}
            },
            summary:langs {
                en {`We see if the object is already loaded, otherwise we create a new load of the object`},
                el {`Βλέπουμε εάν υπάρχει ήδη φορτωμένο το αντικείμενο αλλιώς δημιουργούμε μια νέα φόρτωση του αντικειμένου`}
            },
            desc:langs {
                en {`Implements a simple singleton pattern using a static variable. If the instance does not exist, it is created with the provided properties.`},
                el {`Υλοποιεί ένα απλό μοτίβο singleton χρησιμοποιώντας μια static μεταβλητή. Αν η παρουσία δεν υπάρχει, δημιουργείται με τις παρεχόμενες ιδιότητες.`}
            },
            params:active(`table:{name,type,langs,default}`) {
                param:id(`$properties`),name(`$properties`),type(`array`),default(`[]`),langs {
                    en {`Parameter description in English`},
                    el {`Περιγραφή παραμέτρου στα Ελληνικά`}
                } 
            },
            examples:type(`link`) {
    	        link(`Example Link`),langs {
                    en {`Description of the example link in English`,
                    el {`Περιγραφή του συνδέσμου παραδείγματος στα Ελληνικά`}
                },
                example:type(`pre,code`),langs {
                    all {`$instance = TMyClass::getInstance(['initialized' => true]);`}
                }
            },
            return:type(`TMyClass&`),langs {
                en {`Reference to the singleton instance.`},
                el {`Αναφορά στη μοναδική παρουσία της κλάσης.`}
            },
            throws:types(`none`),langs {
                en {`It does not implement any exceptions.`},
                el {`Δεν υλοποιεί καμία εξαίρεση.`}
            }
        }
    }
    */
    public function &getInstance(array $properties = []): TMyClass
    {
    	static $instance;
	    if (!is_object($instance)) $instance = new TMyClass($properties);
    	return $instance;        
    }
}
?>