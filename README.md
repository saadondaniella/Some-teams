# Some Teams ⚽️

Detta projekt är en övning i **PHP** som går ut på att bygga en liten webbplats där data från en array (`data.php`) visas på sidan.  
Projektet syftar till att träna på grundläggande PHP, versionshantering med Git och att publicera en enkel webbplats via one.com.

---

## Om projektet
Webbplatsen består av två obligatoriska sidor och en valfri dynamisk sida:

1. **Start (index.php)** – visar alla lag från `data.php`.  
2. **About (about.php)** – innehåller information om skaparen.  
3. **Team (team.php)** – *bonus/dynamisk sida* som visar information om det lag man klickar på i listan.

Alla sidor använder en **gemensam header** med navigationsmeny.

---

## Funktioner
- Läser in lagdata från `data.php`.
- Skriver ut data utan att använda HTML inuti PHP-strängar.
- Dynamisk detaljsida för varje lag (via `$_GET`).
- Inga PHP-fel, varningar eller notices.
- Struktur med konsekvent indentering och läsbar kod.
- Publicerad på one.com.

---

## Struktur
some-teams/  
│  
├── data.php  
├── header.php  
├── index.php  
├── about.php  
├── team.php  
├── footer.php  
├── style.css  
├── README.md  
└── LICENSE
