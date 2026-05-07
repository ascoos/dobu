![DoBu Logo](https://cdn.ascoos.com/images/dobu/dobu-logo-2.webp)

# DoBu — Δημιουργός Τεκμηρίωσης για το Οικοσύστημα Ascoos  
### *Documentation DSL εμπνευσμένο από το JML, για πολυγλωσσικά docblocks*

Το **DoBu** (DOcumentation BUilder) είναι μια **γλώσσα τεκμηρίωσης (Documentation DSL)** σχεδιασμένη για το οικοσύστημα **Ascoos OS**.

Δεν είναι PHPDoc.  
Δεν είναι Doxygen.  
Δεν είναι MkDocs ή Docusaurus.

Το DoBu είναι ένα **σημασιολογικό επίπεδο τεκμηρίωσης** που ζει μέσα σε απλά docblocks τύπου:

```php
/* ... */
```

και μετατρέπει τη δομή τεκμηρίωσης σε:

- δομημένα metadata  
- πολυγλωσσική τεκμηρίωση  
- AST‑φιλικούς κόμβους  
- εξαγώγιμα formats (Markdown, HTML, JSON κ.α.)  
- τεκμηρίωση κατάλληλη για IDEs, εργαλεία και υποσυστήματα του Ascoos OS  

Το DoBu μπορεί να χρησιμοποιηθεί σε οποιαδήποτε γλώσσα προγραμματισμού που υποστηρίζει block comments.

---

## Γιατί δημιουργήθηκε το DoBu

Το Ascoos OS είναι ένας kernel με:

- εκατοντάδες κρυπτογραφημένες κλάσεις  
- DSL/AST macro engine  
- CiC interpreters  
- JML markup  
- AI/NLP υποσυστήματα  
- IoT handlers  
- μαθηματικές και επιστημονικές βιβλιοθήκες  
- ιδιόκτητα επίπεδα ασφαλείας  

Κανένα υπάρχον εργαλείο τεκμηρίωσης δεν μπορούσε να:

- υποστηρίξει πολυγλωσσικά metadata  
- ενσωματώσει μαθηματικούς τύπους (LaTeX, MathML) με ανάλυση  
- περιγράψει αριθμητική συμπεριφορά  
- συμπεριλάβει μετρήσεις απόδοσης  
- υποστηρίξει διασταυρούμενες αναφορές  
- παράγει τεκμηρίωση χωρίς αποκάλυψη του source code  

Έτσι δημιουργήθηκε το **DoBu** — ως το **σημασιολογικό documentation layer** του Ascoos OS.

---

## Τι είναι το DoBu

- **Documentation DSL**  
- **Σημασιολογική γλώσσα metadata**  
- **AST‑friendly docblock interpreter**  
- **Πολυγλωσσική μηχανή τεκμηρίωσης**  
- **Επεκτάσιμο σύστημα schemas**  
- **Σύνταξη εμπνευσμένη από το JML Markup**  
- **Ανεξάρτητο γλώσσας**  
- **Επίπεδο τεκμηρίωσης σε επίπεδο πυρήνα**

---

## Βασική Σύνταξη

```php
/*
dobu {
    class:id(`tmyclass`),name(`TMyClass`),extends(`TObject`),namespace(`ASCOOS\OS\Kernel\MyClass`) {
        summary:langs {
            en {`Creating a new Ascoos OS class.`}
            el {`Δημιουργία μιας νέας Ascoos OS κλάσης.`}
        }
    }
}
*/
```

---

## Παράδειγμα Τεκμηρίωσης Κλάσης

```php
/*
dobu {
    class:id(`tmyclass`),name(`TMyClass`),extends(`TObject`),version(`0.0.1`) {
        summary:langs {
            en {`Creating a new Ascoos OS class.`}
            el {`Δημιουργία μιας νέας Ascoos OS κλάσης.`}
        }
    }
}
*/
```

---

## Παράδειγμα Μεθόδου με Μαθηματικά & Συμπεριφορά

Το DoBu υποστηρίζει:

- μαθηματικούς τύπους (LaTeX, MathML)  
- αριθμητική συμπεριφορά  
- μετρήσεις απόδοσης  
- διασταυρούμενες αναφορές  
- περιπτώσεις επαλήθευσης  
- πολυγλωσσικές περιγραφές  

```php
/*
dobu {
    method:id(`blackscholesputdividend`),name(`blackScholesPutDividend`),return(`float`) {
        summary:langs {
            en {`Prices a European put option with continuous dividend yield.`}
            el {`Αποτιμά ένα ευρωπαϊκό put option με συνεχή μερισματική απόδοση.`}
        },
        formula:type(`latex`),value(`\[ P = K e^{-rT} N(-d_2) - S_0 e^{-qT} N(-d_1) \]`)
    }
}
*/
```

## Πλήρες παράδειγμα δομής κλάσης με DoBu

Δείτε το **[πλήρες παράδειγμα δομής](examples/create-dobu-class.php)** του DoBu μέσα σε μια κλάση PHP

---

## Πολυγλωσσική Τεκμηρίωση

```text
langs {
    en {`English text`}
    el {`Ελληνικό κείμενο`}
}
```

---

## Διασταυρούμενες Αναφορές

```text
see:langs {
    all {`• blackScholesCallDividend() • binomialPutEuropean()`}
}
```

---

## Formats Εξαγωγής

Το DoBu εξάγει τεκμηρίωση σε:

- HTML  
- INI  
- JSON  
- Markdown  
- TOML  
- YAML  
- XML  
- και πολλά άλλα formats

---

## Ιδανικό για Proprietary Kernels

Το DoBu λειτουργεί ακόμη και όταν:

- ο κώδικας δεν είναι διαθέσιμος (stubs only)  
- η τεκμηρίωση δεν πρέπει να αποκαλύπτει εσωτερική λογική  
- απαιτείται δομημένη, μηχανικά αναγνώσιμη τεκμηρίωση  

---

## Σχέση με το Ascoos OS

Το DoBu έχει δημιουργηθεί με χρήση κλάσεων του Ascoos OS και χρησιμοποιείται για:

- την τεκμηρίωση του ίδιου του Ascoos OS  
- την τεκμηρίωση παραγόμενου κώδικα  
- την παραγωγή τεκμηρίωσης για άλλες γλώσσες  

---

## Κατάσταση

Το DoBu θα κυκλοφορήσει ως:

- **Online Documentation Builder** (επίσημη σελίδα Ascoos)  
- **ACE Plugin** για τον Ascoos Code Editor  
- **Αυτόνομη εφαρμογή του Ascoos OS**  

---

## Άδεια

Το DoBu θα διανέμεται υπό την άδεια:

- **AGL** (εμπορική άδεια)
