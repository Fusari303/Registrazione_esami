# Progetto registrazione voti di esami universitari
## Fusari Cristian 5AI
### Richieste e regole:
 - Lo scopo principale del progetto è poter registrare i voti degli studenti che effettuano gli esami universitari. Gli esami vengono svolti in date specifiche(6 all'anno)
e sono composti da 2 prove e lo studente può decidere se svolgere entrambe o una sola.
 - I punti della prima prova arrivano fino a 15 e il minimo per la sufficienza è 8 mentre per la seconda(svolgibile dopo aver effettuato la prima)
sono massimo 17. Se lo studente ha raggiunto 18 punti con la somma dei punti delle due prove allora è passato, ma se la somma è 16 o 17,
è obbligato a svolgere la prova orale che può fornire più o meno 3 punti.
 - Se la seconda prova risulta fallita per due volte, allora viene annullata anche la prima. Lo studente può
inoltre decidere se rifiutare o accettare la seconda prova oppure ritirarsi durante il suo svolgimento dove, in quel caso, verrà considerata sola la prima.

### Specifiche del progetto:
- Il professore deve poter inserire il voto con tutte le informazioni possibili(sufficiente,rifiutato,ritirato,ecc.) tramite identificazione.
- Devono essere considerate tutte le regole riguardanti i voti, compreso il conteggio dell'orale, e le prove, come nel caso di fallimento della seconda prova per 2 volte consecutive.
- Il professore deve poter vedere lo storico di uno studente, poter cancellare o modificare eventuali voti e poter generare un report pdf per gli studenti con numero di matricola.
- Gli studenti invece, sempre tramite identificazione, devono poter visualizzare i propri voti insieme al nome del docente che ha corretto le prove.
- Nei report pdf non devono essere visibili i voti insufficienti e per la seconda prova, se il voto dovesse essere 16 o 17, verrà specificato l'orale.
