# DoBu — Documentation Builder for the Ascoos Ecosystem  
### *A JML‑inspired Documentation DSL for multilingual docblocks*

**DoBu** (DOcumentation BUilder) is a **Documentation DSL** designed for the **Ascoos OS** ecosystem.

It is not PHPDoc.  
It is not Doxygen.  
It is not MkDocs or Docusaurus.

DoBu is a **semantic documentation layer** that lives inside simple docblocks such as:

```php
/* ... */
```

and transforms documentation structure into:

- structured metadata  
- multilingual documentation  
- AST‑friendly nodes  
- exportable formats (Markdown, HTML, JSON, etc.)  
- documentation suitable for IDEs, tools, and Ascoos OS subsystems  

DoBu can generate documentation text for any programming language that supports block comments.

---

## Why DoBu Was Created

Ascoos OS is a kernel containing:

- hundreds of encrypted classes  
- a DSL/AST macro engine  
- CiC interpreters  
- JML markup  
- AI/NLP subsystems  
- IoT handlers  
- mathematical and scientific libraries  
- proprietary security layers  

No existing documentation tool could:

- support multilingual metadata  
- embed mathematical formulas (LaTeX, MathML) with analysis  
- describe numerical behavior  
- include performance metrics  
- support cross‑references  
- generate documentation without exposing source code  

Thus, **DoBu** was created as the **semantic documentation layer** of Ascoos OS.

---

## What DoBu Is

- **Documentation DSL**  
- **Semantic metadata language**  
- **AST‑friendly docblock interpreter**  
- **Multilingual documentation engine**  
- **Extensible schema system**  
- **JML‑inspired syntax**  
- **Language‑agnostic**  
- **Kernel‑level documentation layer**

---

## Basic Syntax

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

## Class Documentation Example

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

## Method Example with Math & Behavioral Metadata

DoBu supports:

- mathematical formulas (LaTeX, MathML)  
- numerical behavior  
- performance metrics  
- cross‑references  
- verification cases  
- multilingual descriptions  

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

---

## Full Class Example

See the **[create-dobu-class.php](examples/create-dobu-class.php)** file for a full demonstration inside a PHP class.

---

## Multilingual Documentation

```text
langs {
    en {`English text`}
    el {`Ελληνικό κείμενο`}
}
```

---

## Cross‑References

```text
see:langs {
    all {`• blackScholesCallDividend() • binomialPutEuropean()`}
}
```

---

## Export Formats

DoBu can export documentation to:

- HTML  
- INI  
- JSON  
- Markdown  
- TOML  
- YAML  
- XML  
- and many more formats  

---

## Ideal for Proprietary Kernels

DoBu works even when:

- source code is not available (stubs only)  
- documentation must not reveal internal logic  
- structured, machine‑readable documentation is required  

---

## Relationship with Ascoos OS

DoBu is built using Ascoos OS classes and is used for:

- documenting Ascoos OS itself  
- documenting generated code  
- producing documentation for other languages  

---

## Status

DoBu will be released as:

- **Online Documentation Builder** (official Ascoos website)  
- **ACE Plugin** for the Ascoos Code Editor  
- **Standalone Ascoos OS application**  

---

## License

DoBu will be distributed under:

- **AGL** (commercial license)