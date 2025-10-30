# UD Block: Wellen Grafik

Block zur Darstellung einer SVG-Wellenform als gestalterisches Trenner- oder Übergangselement zwischen Inhaltsbereichen.
Die Wellenform kann in Farbe, Ausrichtung und Position angepasst werden und ist sowohl im Editor als auch im Frontend sichtbar.

---

## Funktionen

- **Anpassbare Wellenform**
  - Auswahl der Wellenfarbe über Farbfeld im Editor
  - Steuerung von Position (oben oder unten) und Ausrichtung (normal oder gespiegelt)
  - Optional transparente oder flächige Darstellung

- **Einfache Integration**
  - Fügt sich als dekoratives Trenner-Element zwischen Blöcken ein
  - Kompatibel mit allen Standard-WordPress-Blöcken und Full Site Editing (FSE)

- **Editor-Integration**
  - Echtzeit-Vorschau der gewählten Farbe und Ausrichtung
  - Keine statischen Werte: Änderungen werden direkt im Editor sichtbar

---

## Screenshots

### Editor-Ansicht
![Wellen Grafik – Editor-Ansicht](./assets/editor-view.png)
*Abbildung: Wellen-Block im Editor mit Farbauswahl und Ausrichtung.*

### Frontend-Ansicht
![Wellen Grafik – Frontend-Ansicht](./assets/ud-wellen-grafik.png)
*Abbildung: Gestaltete Welle als Trenner zwischen Inhaltsbereichen.*

---

## Technische Details

- **Blockname:** `ud/wellen-grafik`
- **Render-Datei:** `includes/render.php`
- **Styles:**
  - `src/css/editor.scss`
  - `src/css/frontend.scss`
- **Attribute (Beispiele):**
  - `color` *(string)* – HEX- oder RGBA-Farbwert der Welle
  - `position` *(string)* – Position der Welle (`top` oder `bottom`)
  - `flip` *(boolean)* – horizontale Spiegelung der Welle

### 🔗 Abhängigkeiten
- Keine weiteren UD-Plugins erforderlich
- Eigenständig nutzbar

---

## Installation

1. Plugin-Ordner `ud-wellen-grafik` in `wp-content/plugins/` kopieren
2. Im WordPress-Backend unter **Plugins → Installierte Plugins** aktivieren
3. Im Block-Editor den Block **„Wellen Grafik“** einfügen und konfigurieren

---

## Anforderungen

- WordPress ≥ 6.7
- PHP ≥ 7.4

---

## Autor

**ulrich.digital gmbh**
[https://ulrich.digital](https://ulrich.digital)

---

## Lizenz

GPL v2 or later
[https://www.gnu.org/licenses/gpl-2.0.html](https://www.gnu.org/licenses/gpl-2.0.html)
