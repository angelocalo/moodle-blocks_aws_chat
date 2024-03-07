<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Languages configuration for the block_AWS_chat plugin.
 *
 * @package   block_AWS_chat
 * @copyright 2024, Angelo Calò <angelo.calo@unipd.it>, Davide Ferro <davide.ferro@unipd.it>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */




$string['pluginname'] = 'Blocco Chat AWS';
$string['block_aws_chat'] = 'Chat AWS';
$string['aws_chat'] = 'Chat AWS';
$string['aws_chat:addinstance'] = 'Aggiungi un nuovo blocco Chat AWS';
$string['aws_chat:myaddinstance'] = 'Aggiungi un nuovo blocco Chat AWS alla pagina Il mio Moodle';
$string['privacy:metadata'] = 'Il blocco Chat AWS memorizza ..........';
$string['res'] = 'Ciao {$a->name}, sono <B>{$a->assistantname},</B> il tuo assistente Moodle. Inserisci la tua domanda e clicca ';
$string['res_no_user'] = 'Ciao, sono <B>{$a->assistantname},</B> il tuo assistente Moodle. Inserisci la tua domanda e clicca ';
$string['button_text'] = 'Elabora';
$string['button_textdesc'] = 'Inserisci il testo che desideri nel pulsante';
$string['prompt2'] = 'Domanda di esempio: a cosa serve l\'attività del database?';
$string['placeholder'] = 'La&nbsp;tua&nbsp;domanda';
$string['title'] = 'Titolo del blocco';
$string['titledesc'] = 'Il titolo del Blocco che vuoi vedere in Moodle';
$string['restrictusage'] = 'Limita l\'utilizzo della chat agli utenti registrati';
$string['restrictusagedesc'] = 'Se questa casella è selezionata, solo gli utenti registrati potranno utilizzare il box della chat.';
$string['apikey'] = 'API Key AWS';
$string['apikeydesc'] = 'La API Key per il tuo account AWS';
$string['region'] = 'Regione';
$string['regiondesc'] = 'La regione AWS';
$string['assistant'] = 'Assistente';
$string['assistantdesc'] = 'L\'assistente predefinito collegato al tuo account AWS che desideri utilizzare per la risposta';
$string['assistantname'] = 'Nome dell\'assistente';
$string['assistantnamedesc'] = 'Il nome che l\'IA utilizzerà internamente per se stessa. Viene utilizzato anche per le intestazioni dell\'interfaccia utente nella finestra di chat.';
$string['secret'] = 'Chiave privata';
$string['secretdesc'] = 'Chiave segreta che l\'IA utilizzerà internamente per l\'utente. ';
$string['prompt'] = 'Richiesta di completamento';
$string['promptdesc'] = 'Il messaggio che verrà dato all\'IA prima della trascrizione della conversazione';
$string['sourceoftruth'] = 'Fonte della verità';
$string['sourceoftruthdesc'] = 'Sebbene l\'IA sia molto capace fin dall\'inizio, se non conosce la risposta a una domanda, è più probabile che fornisca con sicurezza informazioni errate piuttosto che rifiutarsi di rispondere. In questa casella di testo puoi aggiungere domande comuni e le relative risposte da cui l\'IA può attingere. Si prega di inserire domande e risposte nel seguente formato: <pre>D: Domanda 1<br />R: Risposta 1<br /><br />D: Domanda 2<br />R: Risposta 2</pre>';
$string['advanced'] = 'Avanzato';
$string['advanceddesc'] = 'Argomenti avanzati inviati ad AWS. Non toccare se non sai cosa stai facendo!';
$string['savedquestions'] = 'Domande salvate';
$string['savedquestionsdesc'] = 'Numero di domande da salvare come contesto';
$string['temperature'] = 'Temperatura';
$string['temperaturedesc'] = 'Controlla la casualità: la riduzione dei risultati comporta completamenti meno casuali. Quando la temperatura si avvicina allo zero, il modello diventerà deterministico e ripetitivo.';
$string['temperature_student'] = 'Temperatura per l\'utente studente';
$string['temperature_studentdesc'] = 'Controlla la casualità per l\'utente studente: la riduzione dei risultati comporta completamenti meno casuali. Quando la temperatura si avvicina allo zero, il modello diventerà deterministico e ripetitivo.';
$string['maxlength_student'] = 'Lunghezza massima per l\'utente studente';
$string['maxlength_studentdesc'] = 'Il numero massimo di token da generare per l\'utente studente. Le richieste possono utilizzare fino a 2.048 token condivisi tra la richiesta e il completamento. Il limite esatto varia in base al modello. (Un token contiene circa 4 caratteri per il normale testo inglese)';
$string['maxlength'] = 'Lunghezza massima';
$string['maxlengthdesc'] = 'Il numero massimo di token da generare. Le richieste possono utilizzare fino a 2.048 token condivisi tra la richiesta e il completamento. Il limite esatto varia in base al modello. (Un token contiene circa 4 caratteri per il normale testo inglese)';
$string['configtitle'] = 'Titolo';
$string['enablecollaps'] = 'Consenti all\'utente di comprimere questo blocco';
$string['enabledock'] = 'Consenti all\'utente di ancorare questo blocco';
$string['filter'] = 'Filtro utente';
$string['shown'] = 'Mostrato';
$string['hidden'] = 'Nascosto';
$string['nouserfilterset'] = 'Nessun filtro utente impostato';
$string['ifuserprofilefield'] = 'se utente campo profilo';
$string['config_sourceoftruth'] = 'Fonte della verità';
$string['config_sourceoftruth_help'] = "Puoi aggiungere qui le informazioni che l\'IA utilizzerà quando risponde alle domande. Le informazioni dovrebbero essere in formato domanda e risposta esattamente come il seguente:\n\nD: Quando scade la sezione 3?<br />R: Giovedì 16 marzo.\n\nD: Quali sono gli orari di ricevimento?<br />R: Puoi trovare il professor Shown nel suo ufficio tra le 14:00 e le 16:00 il martedì e il giovedì.";
$string['problem_vote'] = "Si è verificato un problema, riprova.";
$string['vote_ok'] = "Il tuo voto è salvato";
