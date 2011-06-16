<?



	# ----------------------------------------------------------------------------------------------------
	# * FILE: /lang/es_es.php
	# ----------------------------------------------------------------------------------------------------

	# ----------------------------------------------------------------------------------------------------
	# DATE/TIME
	# ----------------------------------------------------------------------------------------------------
	//january,february,march,april,may,june,july,august,september,october,november,december
	define(LANG_DATE_MONTHS, "enero,febrero,marzo,abril,mayo,junio,julio,agosto,septiembre,octubre,noviembre,diciembre");
	//sunday,monday,tuesday,wednesday,thursday,friday,saturday
	define(LANG_DATE_WEEKDAYS, "domingo,lunes,martes,mi�rcoles,jueves,viernes,s�bado");
	//year
	define(LANG_YEAR, "a�o");
	//month
	define(LANG_MONTH, "mes");
	//day
	define(LANG_DAY, "d�a");
	//y
	define(LANG_LETTER_YEAR, "a");
	//m
	define(LANG_LETTER_MONTH, "m");
	//d
	define(LANG_LETTER_DAY, "d");
	//Hour
	define(LANG_LABEL_HOUR, "Hora");
	//Minute
	define(LANG_LABEL_MINUTE, "Minuto");
	// DATE FORMAT - SET JUST ONE FORMAT
	// Y - numeric representation of a year with 4 digits (xxxx)
	// m - numeric representation of a month with 2 digits (01 - 12)
	// d - numeric representation of a day of the month with 2 digits (01 - 31)
	//define(DEFAULT_DATE_FORMAT, "m/d/Y");
	define(DEFAULT_DATE_FORMAT, "d/m/Y");

	# ----------------------------------------------------------------------------------------------------
	# ZIPCODE
	# ----------------------------------------------------------------------------------------------------
	//ZIPCODE_UNIT - Available just for: mile or km
	define(ZIPCODE_UNIT, "mile");
	//mile
	define(ZIPCODE_UNIT_LABEL, "milla");
	//miles
	define(ZIPCODE_UNIT_LABEL_PLURAL, "millas");
	//zipcode
	define(ZIPCODE_LABEL, "c�digo postal");

	# ----------------------------------------------------------------------------------------------------
	# JAVASCRIPT
	# ----------------------------------------------------------------------------------------------------
	//Wait, Loading Category Tree...
	define(LANG_JS_LOADCATEGORYTREE, "Espere, cargando �rbol de categor�as...");
	//Loading...
	define(LANG_JS_LOADING, "Cargando...");
	//This item was added to your Quick List. You can view your Quick List by clicking on 'View Quick List' link.
	define(LANG_JS_FAVORITEADD, "Este elemento se agreg� a su Lista R�pida.\n\nPuede ver su Lista R�pida haciendo clic en el v�nculo 'Ver Lista R�pida'.");
	//This item was removed from your Quick List.
	define(LANG_JS_FAVORITEDEL, "Este elemento se quit� de su Lista R�pida.");
	//Google Map is not available for the current address.
	define(LANG_JS_GOOGLEMAPS_NOTAVAILABLE_ADDRESS, "No hay mapa de Google para la direcci�n actual.");
	//Invalid date format
	define(LANG_JS_CALENDAR_INVALIDDATEFORMAT, "Formato de fecha no v�lido");
	//Invalid year value
	define(LANG_JS_CALENDAR_INVALIDYEARVALUE, "Valor de a�o no v�lido");
	//Invalid month value
	define(LANG_JS_CALENDAR_INVALIDMONTHVALUE, "Valor de mes no v�lido");
	//Invalid day of month value
	define(LANG_JS_CALENDAR_INVALIDDAYMONTHVALUE, "Valor de d�a no v�lido");
	//Invalid hours value
	define(LANG_JS_CALENDAR_INVALIDHOURSVALUE, "Valor de horas no v�lido");
	//Invalid minutes value
	define(LANG_JS_CALENDAR_INVALIDMINUTESVALUE, "Valor de minutos no v�lido");
	//Invalid seconds value
	define(LANG_JS_CALENDAR_INVALIDSECONDSVALUE, "Valor de segundos no v�lido");
	//"Format accepted is" xx-xx-xxxx
	define(LANG_JS_CALENDAR_FORMATACCEPTED, "El formato aceptado es");
	//"Allowed range is" xx-xx
	define(LANG_JS_CALENDAR_ALLOWEDRANGE, "El rango permitido es");
	//Allowed values are unsigned integers
	define(LANG_JS_CALENDAR_ALLOWEDVALUESUNSIGNEDINTEGERS, "Los valores permitidos son n�meros enteros con valor igual a cero o positivos");
	//No year value can be found
	define(LANG_JS_CALENDAR_NOYEARVALUE, "No se puede encontrar el valor de a�o");
	//No month value can be found
	define(LANG_JS_CALENDAR_NOMONTHVALUE, "No se puede encontrar el valor de mes");
	//No day of month value can be found
	define(LANG_JS_CALENDAR_NODAYMONTHVALUE, "No se puede encontrar el valor de d�a del mes");
	//weak
	define(LANG_JS_LABEL_WEAK, "bajo");
	//bad
	define(LANG_JS_LABEL_BAD, "malo");
	//good
	define(LANG_JS_LABEL_GOOD, "bueno");
	//strong
	define(LANG_JS_LABEL_STRONG, "fuerte");
	//There was a problem retrieving the XML data:
	define(LANG_JS_ACCOUNTSEARCH_PROBLEMRETRIEVING, 'Hubo un problema al recuperar los datos XML:');
	//Click here to select an account.
	define(LANG_JS_ACCOUNTSEARCH_CLICKHERETOSELECT, 'Haga clic aqu� para seleccionar una cuenta.');
	//Please provide at least a 3 letra word for the search!
	define(LANG_JS_ACCOUNTSEARCH_PLEASEPROVIDEATLEAST, 'Escriba al menos una palabra de tres letras para la b�squeda.');
	//Server response failure!
	define(LANG_JS_ACCOUNTSEARCH_SERVERRESPONSEFAILURE, 'Error de respuesta del servidor.');
	//Close
	define(LANG_JS_CLOSE, "Cerrar");

	# ----------------------------------------------------------------------------------------------------
	# STRING EVENT DATE
	# ----------------------------------------------------------------------------------------------------
	//[MONTHNAME] [DAY][SUFFIX], [YEAR]
	define(LANG_STRINGDATE_YEARANDMONTHANDDAY, "d \d\e F \d\e Y");
	//[MONTHNAME] [YEAR]
	define(LANG_STRINGDATE_YEARANDMONTH, "F \d\e Y");

	# ----------------------------------------------------------------------------------------------------
	# INCLUDES
	# ----------------------------------------------------------------------------------------------------
	//N/A
	define(LANG_NA, "N/D");
	//characters
	define(LANG_LABEL_CHARACTERES, "caracteres");
	//by
	define(LANG_BY, "por");
	//Read More
	define(LANG_READMORE, "Leer m�s");
	//Browse by Category
	define(LANG_BROWSEBYCATEGORY, "B�squeda por Categor�a");
	//Browse by Location
	define(LANG_BROWSEBYLOCATION, "B�squeda por Ubicaci�n");
	//Bill to
	define(LANG_BILLTO, "Facturar a");
	//Issuing Date
	define(LANG_ISSUINGDATE, "Fecha de emisi�n");
	//Expire Date
	define(LANG_EXPIREDATE, "Fecha de vencimiento");
	//Questions
	define(LANG_QUESTIONS, "Preguntas");
	//Please call
	define(LANG_PLEASECALL, "Llame");
	//Invoice Info
	define(LANG_INVOICEINFO, "Informaci�n de la factura");
	//Payment Date
	define(LANG_PAYMENTDATE, "Fecha del pago");
	//None
	define(LANG_NONE, "Ninguna");
	//Custom Invoice
	define(LANG_CUSTOM_INVOICES, "Factura personalizada");
	//Locations
	define(LANG_LOCATIONS, "Ubicaciones");
	//Close
	define(LANG_CLOSE, "Cerrar");
	//Close this window
	define(LANG_CLOSEWINDOW, "Cerrar esta ventana");
	//Close this window
	define(LANG_LABEL_CLOSETHISWINDOW, "Cerrar esta ventana");
	//from
	define(LANG_FROM, "de");
	//Transaction Info
	define(LANG_TRANSACTION_INFO, "Informaci�n de la transacci�n");
	//creditcard
	define(LANG_CREDITCARD, "Tarjeta de Cr�dito");
	//Join Now!
	define(LANG_JOIN_NOW, "�nase ahora");
	//More Info
	define(LANG_MOREINFO, "M�s informaci�n");
	//and
	define(LANG_AND, "y");
	//Keyword sample 1: "Auto Parts"
	define(LANG_KEYWORD_SAMPLE_1, "Autopartes");
	//Keyword sample 2: "Tires"
	define(LANG_KEYWORD_SAMPLE_2, "Neum�ticos");
	//Keyword sample 3: "Engine Repair"
	define(LANG_KEYWORD_SAMPLE_3, "Reparaci�n de motor");
	//Categories and sub-categories
	define(LANG_CATEGORIES_SUBCATEGS, "Categor�as y subcategor�as");
	//per
	define(LANG_PER, "por");
	//each
	define(LANG_EACH, "cada");
	//impressions block
	define(LANG_IMPRESSIONSBLOCK, "bloque de impresiones");
	//Add
	define(LANG_ADD, "Agregar");
	//Manage
	define(LANG_MANAGE, "Administrar");
	//impressions to my paid credit of
	define(LANG_IMPRESSIONPAIDOF, "impresiones a mi cr�dito pago de");
	//Section
	define(LANG_SECTION, "Secci�n");
	//General Pages
	define(LANG_GENERALPAGES, "P�ginas generales");
	//Open in a new window
	define(LANG_OPENNEWWINDOW, "Abrir en una nueva ventana");
	//No
	define(LANG_NO, "No");
	//Yes
	define(LANG_YES, "S�");
	//Dear
	define(LANG_DEAR, "Estimado");
	//Street Address, P.O. box
	define(LANG_ADDRESS_EXAMPLE, "Domicilio, casilla de correo");
	//Apartment, suite, unit, building, floor, etc.
	define(LANG_ADDRESS2_EXAMPLE, "Departamento, habitaci�n, unidad, edificio, piso, etc.");
	//or
	define(LANG_OR, "o");
	//Hour of Work sample 1: "Sun 8:00 am - 6:00 pm"
	define(LANG_HOURWORK_SAMPLE_1, "Dom. de 08:00 a.m. a 06:00 p.m.");
	//Hour of Work sample 2: "Mon 8:00 am - 9:00 pm"
	define(LANG_HOURWORK_SAMPLE_2, "Lun. de 08:00 a.m. a 09:00 p.m.");
	//Hour of Work sample 3: "Tue 8:00 am - 9:00 pm"
	define(LANG_HOURWORK_SAMPLE_3, "Mar. de 08:00 a.m. a 09:00 p.m.");
	//Extra fields
	define(LANG_EXTRA_FIELDS, "Campos extra");
	//Log me in automatically
	define(LANG_AUTOLOGIN, "Iniciar autom�ticamente");
	//Check / Uncheck All
	define(LANG_CHECK_UNCHECK_ALL, "Seleccionar/deseleccionar todo");
	//Billing Information
	define(LANG_BIILING_INFORMATION, "Informaci�n de Cuentas");
	//on Listing
	define(LANG_ON_LISTING, "en Lista");
	//on Event
	define(LANG_ON_EVENT, "en Evento");
	//on Banner
	define(LANG_ON_BANNER, "en Banner");
	//on Classified
	define(LANG_ON_CLASSIFIED, "en Clasificado");
	//on Article
	define(LANG_ON_ARTICLE, "en Art�culo");
	//Listing Name
	define(LANG_LISTING_NAME, "Nombre de la Lista");
	//Event Name
	define(LANG_EVENT_NAME, "Nombre del Evento");
	//Banner Name
	define(LANG_BANNER_NAME, "Nombre del Banner");
	//Classified Name
	define(LANG_CLASSIFIED_NAME, "Nombre del Clasificado");
	//Article Name
	define(LANG_ARTICLE_NAME, "Nombre del Art�culo");
	//Frequently Asked Questions
	define(LANG_FAQ_NAME, "Preguntas Frecuentes");
	//Active
	define(LANG_LABEL_ACTIVE, "Activo");
	//Suspended
	define(LANG_LABEL_SUSPENDED, "Suspendido");
	//Expired
	define(LANG_LABEL_EXPIRED, "Vencido");
	//Pending
	define(LANG_LABEL_PENDING, "Pendiente");
	//Received
	define(LANG_LABEL_RECEIVED, "Recibido");
	//Promotional Code
	define(LANG_LABEL_DISCOUNTCODE, "C�digo de Promoci�n");
	//Account
	define(LANG_LABEL_ACCOUNT, "Cuenta");
	//Name or Title
	define(LANG_LABEL_NAME_OR_TITLE, "Nombre o t�tulo");
	//Name
	define(LANG_LABEL_NAME, "Nombre");
	//Page Name
	define(LANG_LABEL_PAGE_NAME, "Nombre de la p�gina");
	//Summary Description
	define(LANG_LABEL_SUMMARY_DESCRIPTION, "Descripci�n resumida");
	//Category
	define(LANG_LABEL_CATEGORY, "Categor�a");
	//Category
	define(LANG_CATEGORY, "Categor�a");
	//Categories
	define(LANG_LABEL_CATEGORY_PLURAL, "Categor�as");
	//Categories
	define(LANG_CATEGORY_PLURAL, "Categor�as");
	//Country
	define(LANG_LABEL_COUNTRY, "Pa�s");
	//State
	define(LANG_LABEL_STATE, "Estado");
	//City
	define(LANG_LABEL_CITY, "Ciudad");
	//Renewal
	define(LANG_LABEL_RENEWAL, "Renovaci�n");
	//Renewal Date
	define(LANG_LABEL_RENEWAL_DATE, "Fecha de renovaci�n");
	//Street Address
	define(LANG_LABEL_STREET_ADDRESS, "Domicilio");
	//Web Address
	define(LANG_LABEL_WEB_ADDRESS, "Direcci�n web");
	//Phone
	define(LANG_LABEL_PHONE, "Tel�fono");
	//Fax
	define(LANG_LABEL_FAX, "Fax");
	//Long Description
	define(LANG_LABEL_LONG_DESCRIPTION, "Descripci�n extensa");
	//Status
	define(LANG_LABEL_STATUS, "Estado");
	//Level
	define(LANG_LABEL_LEVEL, "Nivel");
	//Empty
	define(LANG_LABEL_EMPTY, "Vac�o");
	//Start Date
	define(LANG_LABEL_START_DATE, "Fecha de inicio");
	//Start Date
	define(LANG_LABEL_STARTDATE, "Fecha de inicio");
	//End Date
	define(LANG_LABEL_END_DATE, "Fecha de finalizaci�n");
	//End Date
	define(LANG_LABEL_ENDDATE, "Fecha de finalizaci�n");
	//Invalid date
	define(LANG_LABEL_INVALID_DATE, "Fecha no v�lida");
	//Start Time
	define(LANG_LABEL_START_TIME, "Hora de inicio");
	//End Time
	define(LANG_LABEL_END_TIME, "Hora de finalizaci�n");
	//Unlimited
	define(LANG_LABEL_UNLIMITED, "Sin l�mite");
	//Select a Type
	define(LANG_LABEL_SELECT_TYPE, "Seleccione un tipo");
	//Select a Category
	define(LANG_LABEL_SELECT_CATEGORY, "Seleccione una categor�a");
	//No Promotion
	define(LANG_LABEL_NO_PROMOTION, "No hay Promoci�n");
	//Select a Promotion
	define(LANG_LABEL_SELECT_PROMOTION, "Seleccione una Promoci�n");
	//Contact Name
	define(LANG_LABEL_CONTACTNAME, "Nombre de Contacto");
	//Contact Name
	define(LANG_LABEL_CONTACT_NAME, "Nombre de Contacto");
	//Contact Phone
	define(LANG_LABEL_CONTACT_PHONE, "Tel�fono de Contacto");
	//Contact Fax
	define(LANG_LABEL_CONTACT_FAX, "Fax de Contacto");
	//Contact E-mail
	define(LANG_LABEL_CONTACT_EMAIL, "Correo Electr�nico");
	//URL
	define(LANG_LABEL_URL, "URL");
	//Address
	define(LANG_LABEL_ADDRESS, "Direcci�n");
	//E-mail
	define(LANG_LABEL_EMAIL, "Correo Electr�nico");
	//Invoice
	define(LANG_LABEL_INVOICE, "Factura");
	//Invoice #
	define(LANG_LABEL_INVOICENUMBER, "N. � de Factura");
	//Item
	define(LANG_LABEL_ITEM, "Elemento");
	//Items
	define(LANG_LABEL_ITEMS, "Elementos");
	//Extra Category
	define(LANG_LABEL_EXTRA_CATEGORY, "Categor�a extra");
	//Discount Code
	define(LANG_LABEL_DISCOUNT_CODE, "C�digo de Promoci�n");
	//Amount
	define(LANG_LABEL_AMOUNT, "Valor");
	//Make checks payable to
	define(LANG_LABEL_MAKE_CHECKS_PAYABLE, "Emitir cheques a nombre de");
	//Total
	define(LANG_LABEL_TOTAL, "Total");
	//Id
	define(LANG_LABEL_ID, "Id.");
	//IP
	define(LANG_LABEL_IP, "IP");
	//Title
	define(LANG_LABEL_TITLE, "T�tulo");
	//Caption
	define(LANG_LABEL_CAPTION, "Ep�grafe");
	//impressions
	define(LANG_IMPRESSIONS, "impresiones");
	//Impressions
	define(LANG_LABEL_IMPRESSIONS, "Impresiones");
	//Date
	define(LANG_LABEL_DATE, "Fecha");
	//Your E-mail
	define(LANG_LABEL_YOUREMAIL, "Su correo electr�nico");
	//Subject
	define(LANG_LABEL_SUBJECT, "Asunto");
	//Additional message
	define(LANG_LABEL_ADDITIONALMSG, "Mensaje adicional");
	//Payment type
	define(LANG_LABEL_PAYMENT_TYPE, "Tipo de pago");
	//Notes
	define(LANG_LABEL_NOTES, "Notas");
	//It's easy and fast!
	define(LANG_LABEL_EASYFAST, "Es f�cil y r�pido");
	//Already have access?
	define(LANG_LABEL_ALREADYMEMBER, "�Ya tiene acceso?");
	//Enjoy our services!
	define(LANG_LABEL_ENJOYSERVICES, "Disfrute los servicios");
	//Test Password
	define(LANG_LABEL_TESTPASSWORD, "Contrase�a de Prueba");
	//Forgot your password?
	define(LANG_LABEL_FORGOTPASSWORD, "�Olvid� su contrase�a?");
	//Summary
	define(LANG_LABEL_SUMMARY, "Resumen");
	//Detail
	define(LANG_LABEL_DETAIL, "Detalle");
	//From
	define(LANG_LABEL_FROM, "De");
	//To
	define(LANG_LABEL_TO, "A");
	//to
	define(LANG_LABEL_DATE_TO, "a");
	//Last
	define(LANG_LABEL_LAST, "�ltimo");
	//Last
	define(LANG_LABEL_LAST_PLURAL, "�ltimo");
	//day
	define(LANG_LABEL_DAY, "d�a");
	//days
	define(LANG_LABEL_DAYS, "d�as");
	//New
	define(LANG_LABEL_NEW, "Nuevo");
	//Type
	define(LANG_LABEL_TYPE, "Tipo");
	//ClickThru
	define(LANG_LABEL_CLICKTHRU, "Clic directo");
	//Added
	define(LANG_LABEL_ADDED, "Agregado");
	//Add
	define(LANG_LABEL_ADD, "Agregar");
	//Reviewer
	define(LANG_LABEL_REVIEWER, "Revisor");
	//System
	define(LANG_LABEL_SYSTEM, "Sistema");
	//Subscribe to RSS
	define(LANG_LABEL_SUBSCRIBERSS, "Suscripci�n a RSS");
	//Password strength
	define(LANG_LABEL_PASSWORDSTRENGTH, "Fortaleza de la contrase�a");
	//Article Title
	define(LANG_ARTICLE_TITLE, "T�tulo del Art�culo");
	//SEO Description
	define(LANG_SEO_DESCRIPTION, "SEO Descripci�n");
	//SEO Keywords
	define(LANG_SEO_KEYWORDS, "SEO palabras clave");
	//Click here to edit the SEO information of this item
	define (LANG_MSG_CLICK_TO_EDIT_SEOCENTER, "Haga clic aqu� para editar la informaci�n SEO de este elemento.");
	//SEO successfully updated!
	define(LANG_MSG_SEOCENTER_ITEMUPDATED, "Se actualiz� las informaciones de SEO!");
	//Click here to view this article
	define(LANG_MSG_CLICK_TO_VIEW_THIS_ARTICLE, "Haga clic aqu� para ver este art�culo");
	//Click here to edit this article
	define(LANG_MSG_CLICK_TO_EDIT_THIS_ARTICLE, "Haga clic aqu� para modificar este art�culo");
	//Click here to add/edit photo gallery for this article
	define(LANG_MSG_CLICK_TO_ADD_EDIT_PHOTO_GALLERY_THIS_ARTICLE, "Haga clic aqu� para agregar o modificar la galer�a de fotos de este art�culo");
	//Photo gallery not available for this article
	define(LANG_PHOTO_GALLERY_NOT_AVAILABLE_FOR_ARTICLE, "No hay galer�a de fotos para este art�culo");
	//Click here to view this article reports
	define(LANG_MSG_CLICK_TO_VIEW_THIS_ARTICLE_REPORTS, "Haga clic aqu� para ver los informes de este art�culo");
	//History for this article
	define(LANG_HISTORY_FOR_THIS_ARTICLE, "Historial de este art�culo");
	//History not available for this article
	define(LANG_HISTORY_NOT_AVAILABLE_FOR_ARTICLE, "No hay historial para este art�culo");
	//Click here to delete this article
	define(LANG_MSG_CLICK_TO_DELETE_THIS_ARTICLE, "Haga clic aqu� para eliminar este art�culo");
	//Click here to view this banner
	define(LANG_MSG_CLICK_TO_VIEW_THIS_BANNER, "Haga clic aqu� para ver este banner");
	//Click here to edit this banner
	define(LANG_MSG_CLICK_TO_EDIT_THIS_BANNER, "Haga clic aqu� para modificar este banner");
	//Click here to view this banner reports
	define(LANG_MSG_CLICK_TO_VIEW_THIS_BANNER_REPORTS, "Haga clic aqu� para ver los informes de este banner");
	//History for this banner
	define(LANG_HISTORY_FOR_THIS_BANNER, "Historial de este banner");
	//History not available for this banner
	define(LANG_HISTORY_NOT_AVAILABLE_FOR_BANNER, "No hay historial para este banner");
	//Click here to delete this banner
	define(LANG_MSG_CLICK_TO_DELETE_THIS_BANNER, "Haga clic aqu� para eliminar este banner");
	//Classified Title
	define(LANG_CLASSIFIED_TITLE, "T�tulo del Clasificado");
	//Click here to
	define(LANG_MSG_CLICKTO, "Haga clic aqu� para");
	//Click here to view this classified
	define(LANG_MSG_CLICK_TO_VIEW_THIS_CLASSIFIED, "Haga clic aqu� para ver este clasificado");
	//Click here to edit this classified
	define(LANG_MSG_CLICK_TO_EDIT_THIS_CLASSIFIED, "Haga clic aqu� para modificar este clasificado");
	//Click here to add/edit photo gallery for this classified
	define(LANG_MSG_CLICK_TO_ADD_EDIT_PHOTO_GALLERY_THIS_CLASSIFIED, "Haga clic aqu� para agregar o modificar la galer�a de fotos de este clasificado");
	//Photo gallery not available for this classified
	define(LANG_PHOTO_GALLERY_NOT_AVAILABLE_FOR_CLASSIFIED, "No hay galer�a de fotos para este clasificado");
	//Click here to view this classified reports
	define(LANG_MSG_CLICK_TO_VIEW_THIS_CLASSIFIED_REPORTS, "Haga clic aqu� para ver los informes de este clasificado");
	//Click here to map tuning this classified location
	define(LANG_MSG_CLICK_TO_MAP_TUNING_THIS_CLASSIFIED, "Haga clic aqu� para ajustar el mapa de ubicaci�n de este clasificado");
	//Map tuning not available for this classified
	define(LANG_LABEL_MAP_TUNING_NOT_AVAILABLE_FOR_CLASSIFIED, "No hay ajuste de mapa para este clasificado");
	//History for this classified
	define(LANG_HISTORY_FOR_THIS_CLASSIFIED, "Historial de este clasificado");
	//History not available for this classified
	define(LANG_HISTORY_NOT_AVAILABLE_FOR_CLASSIFIED, "No hay historial para este clasificado");
	//Click here to delete this classified
	define(LANG_MSG_CLICK_TO_DELETE_THIS_CLASSIFIED, "Haga clic aqu� para eliminar este clasificado");
	//Event Title
	define(LANG_EVENT_TITLE, "T�tulo del Evento");
	//Click here to view this event
	define(LANG_MSG_CLICK_TO_VIEW_THIS_EVENT, "Haga clic aqu� para ver este evento");
	//Click here to edit this event
	define(LANG_MSG_CLICK_TO_EDIT_THIS_EVENT, "Haga clic aqu� para modificar este evento");
	//Click here to add/edit photo gallery for this event
	define(LANG_MSG_CLICK_TO_ADD_EDIT_PHOTO_GALLERY_THIS_EVENT, "Haga clic aqu� para agregar o modificar la galer�a de fotos de este evento");
	//Photo gallery not available for this event
	define(LANG_PHOTO_GALLERY_NOT_AVAILABLE_FOR_EVENT, "No hay galer�a de fotos para este evento");
	//Click here to view this event reports
	define(LANG_MSG_CLICK_TO_VIEW_THIS_EVENT_REPORTS, "Haga clic aqu� para ver los informes de este evento");
	//Click here to map tuning this event location
	define(LANG_MSG_CLICK_TO_MAP_TUNING_THIS_EVENT, "Haga clic aqu� para ajustar el mapa de ubicaci�n de este evento");
	//Map tuning not available for this event
	define(LANG_LABEL_MAP_TUNING_NOT_AVAILABLE_FOR_EVENT, "No hay ajuste de mapa para este evento");
	//History for this event
	define(LANG_HISTORY_FOR_THIS_EVENT, "Historial de este evento");
	//History not available for this event
	define(LANG_HISTORY_NOT_AVAILABLE_FOR_EVENT, "No hay historial para este evento");
	//Click here to delete this event
	define(LANG_MSG_CLICK_TO_DELETE_THIS_EVENT, "Haga clic aqu� para eliminar este evento");
	//Gallery Title
	define(LANG_GALLERY_TITLE, "T�tulo de la galer�a");
	//Click here to view this gallery
	define(LANG_MSG_CLICK_TO_VIEW_THIS_GALLERY, "Haga clic aqu� para ver esta galer�a");
	//Click here to edit this gallery
	define(LANG_MSG_CLICK_TO_EDIT_THIS_GALLERY, "Haga clic aqu� para modificar esta galer�a");
	//Click here to delete this gallery
	define(LANG_MSG_CLICK_TO_DELETE_THIS_GALLERY, "Haga clic aqu� para eliminar esta galer�a");
	//Listing Title
	define(LANG_LISTING_TITLE, "T�tulo de la Lista");
	//Click here to view this listing
	define(LANG_MSG_CLICK_TO_VIEW_THIS_LISTING, "Haga clic aqu� para ver esta lista");
	//Click here to edit this listing
	define(LANG_MSG_CLICK_TO_EDIT_THIS_LISTING, "Haga clic aqu� para modificar esta lista");
	//Click here to add/edit photo gallery for this listing
	define(LANG_MSG_CLICK_TO_ADD_EDIT_PHOTO_GALLERY_THIS_LISTING, "Haga clic aqu� para agregar o modificar la galer�a de fotos de esta lista");
	//Photo gallery not available for this listing
	define(LANG_PHOTO_GALLERY_NOT_AVAILABLE_FOR_LISTING, "No hay galer�a de fotos para esta lista");
	//Click here to change promotion for this listing
	define(LANG_MSG_CLICK_TO_CHANGE_PROMOTION, "Haga clic aqu� para cambiar la promoci�n de esta lista");
	//Promotion not available for this listing
	define(LANG_MSG_PROMOTION_NOT_AVAILABLE, "La promoci�n no est� disponible para la lista");
	//Click here to view this listing reports
	define(LANG_MSG_CLICK_TO_VIEW_THIS_LISTING_REPORTS, "Haga clic aqu� para ver los informes de la lista");
	//Click here to map tuning this listing location
	define(LANG_MSG_CLICK_TO_MAP_TUNING_THIS_LISTING, "Haga clic aqu� para ajustar el mapa de ubicaci�n de la lista");
	//Map tuning not available for this listing
	define(LANG_LABEL_MAP_TUNING_NOT_AVAILABLE_FOR_LISTING, "No hay ajuste de mapa para la lista");
	//Click here to view this item reviews
	define(LANG_MSG_CLICK_TO_VIEW_THIS_ITEM_REVIEWS, "Haga clic aqu� para ver las calificaciones del elemento");
	//Item reviews not available
	define(LANG_MSG_ITEM_REVIEWS_NOT_AVAILABLE, "No hay calificaciones para este Elemento");
	//History for this listing
	define(LANG_HISTORY_FOR_THIS_LISTING, "Historial de la lista");
	//History not available for this listing
	define(LANG_HISTORY_NOT_AVAILABLE_FOR_LISTING, "No hay historial para la lista");
	//Click here to delete this listing
	define(LANG_MSG_CLICK_TO_DELETE_THIS_LISTING, "Haga clic aqu� para eliminar la lista");
	//Promotion Title
	define(LANG_PROMOTION_TITLE, "T�tulo de la Promoci�n");
	//Click here to view this promotion
	define(LANG_MSG_CLICK_TO_VIEW_THIS_PROMOTION, "Haga clic aqu� para ver esta promoci�n");
	//Click here to edit this promotion
	define(LANG_MSG_CLICK_TO_EDIT_THIS_PROMOTION, "Haga clic aqu� para modificar esta promoci�n");
	//Click here to delete this promotion
	define(LANG_MSG_CLICK_TO_DELETE_THIS_PROMOTION, "Haga clic aqu� para eliminar esta promoci�n");
	//Go to "Listings" and click on the promotion icon belonging to the listing where you want to add the promotion. Select one promotion to add to your listing to make it live.
	define(LANG_PROMOTION_EXTRAMESSAGE, "Vaya a \"Listas\" y haga clic en el icono de promoci�n que pertenece a la lista donde desea agregar la promoci�n. Seleccione una promoci�n para agregar a su lista y activarla.");
	//The installments will be recurring until your credit card expiration
	define(LANG_MSG_RECURRINGUNTILCARDEXPIRATION, "Las instalaciones se reiterar�n hasta el vencimiento de su Tarjeta de Cr�dito");
	//The installments will be recurring until your credit card expiration ("maximum of 36 installments")
	define(LANG_MSG_RECURRINGUNTILCARDEXPIRATIONMAXOF, "m�ximo de 36 instalaciones");
	//SEO Center
	define(LANG_MSG_SEO_CENTER, "SEO Center");
	//View
	define(LANG_LABEL_VIEW, "Ver");
	//Edit
	define(LANG_LABEL_EDIT, "Modificar");
	//Gallery
	define(LANG_LABEL_GALLERY, "Galer�a");
	//Traffic Reports
	define(LANG_TRAFFIC_REPORTS, "Informes de tr�fico");
	//Unpaid
	define(LANG_LABEL_UNPAID, "Sin pagar");
	//Transaction
	define(LANG_LABEL_TRANSACTION, "Transacci�n");
	//Delete
	define(LANG_LABEL_DELETE, "Eliminar");
	//Map Tuning
	define(LANG_LABEL_MAP_TUNING, "Ajuste de mapa");
	//SEO
	define(LANG_LABEL_SEO_TUNING, "SEO");
	//Print
	define(LANG_LABEL_PRINT, "Imprimir");
	//Pending Approval
	define(LANG_LABEL_PENDING_APPROVAL, "Aprobaci�n pendiente");
	//Image
	define(LANG_LABEL_IMAGE, "Imagen");
	//Images
	define(LANG_LABEL_IMAGE_PLURAL, "Im�genes");
	//Required field
	define(LANG_LABEL_REQUIRED_FIELD, "Campo requerido");
	//Account Information
	define(LANG_LABEL_ACCOUNT_INFORMATION, "Informaci�n de la cuenta");
	//Username
	define(LANG_LABEL_USERNAME, "Usuario");
	//Current Password
	define(LANG_LABEL_CURRENT_PASSWORD, "Contrase�a actual");
	//Password
	define(LANG_LABEL_PASSWORD, "Contrase�a");
	//Retype Password
	define(LANG_LABEL_RETYPE_PASSWORD, "Vuelva a escribir la contrase�a");
	//Retype Password
	define(LANG_LABEL_RETYPEPASSWORD, "Vuelva a escribir la contrase�a");
	//OpenID URL
	define(LANG_LABEL_OPENIDURL, "OpenID URL");
	//Information
	define(LANG_LABEL_INFORMATION, "Informaci�n");
	//Publication Date
	define(LANG_LABEL_PUBLICATION_DATE, "Fecha de publicaci�n");
	//Calendar
	define(LANG_LABEL_CALENDAR, "Calendario");
	//Friendly Url
	define(LANG_LABEL_FRIENDLY_URL, "URL sem�ntica");
	//For example
	define(LANG_LABEL_FOR_EXAMPLE, "Por ejemplo");
	//Image Source
	define(LANG_LABEL_IMAGE_SOURCE, "Origen de la imagen");
	//Image Attribute
	define(LANG_LABEL_IMAGE_ATTRIBUTE, "Atributo de la imagen");
	//Image Caption
	define(LANG_LABEL_IMAGE_CAPTION, "Ep�grafe de la imagen");
	//Abstract
	define(LANG_LABEL_ABSTRACT, "Resumen");
	//Keywords for the search
	define(LANG_LABEL_KEYWORDS_FOR_SEARCH, "Palabras clave para la b�squeda");
	//max
	define(LANG_LABEL_MAX, "m�x.");
	//keywords
	define(LANG_LABEL_KEYWORDS, "palabras clave");
	//Content
	define(LANG_LABEL_CONTENT, "Contenido");
	//Code
	define(LANG_LABEL_CODE, "C�digo");
	//free
	define(LANG_FREE, "LIBRE");
	//free
	define(LANG_LABEL_FREE, "libre");
	//Destination Url
	define(LANG_LABEL_DESTINATION_URL, "URL de destino");
	//Script
	define(LANG_LABEL_SCRIPT, "Secuencia de comandos");
	//File
	define(LANG_LABEL_FILE, "Archivo");
	//Warning
	define(LANG_LABEL_WARNING, "Advertencia");
	//Display URL (optional)
	define(LANG_LABEL_DISPLAY_URL, "Mostrar URL (opcional)");
	//Description line 1
	define(LANG_LABEL_DESCRIPTION_LINE1, "L�nea de descripci�n 1");
	//Description line 2
	define(LANG_LABEL_DESCRIPTION_LINE2, "L�nea de descripci�n 2");
	//Locations
	define(LANG_LABEL_LOCATIONS, "Ubicaci�n");
	//Address (optional)
	define(LANG_LABEL_ADDRESS_OPTIONAL, "Direcci�n (opcional)");
	//Address (Optional)
	define(LANG_LABEL_ADDRESSOPTIONAL, "Direcci�n (opcional)");
	//Detail Description
	define(LANG_LABEL_DETAIL_DESCRIPTION, "Descripci�n detallada");
	//Price
	define(LANG_LABEL_PRICE, "Precio");
	//Prices
	define(LANG_LABEL_PRICE_PLURAL, "Precios");
	//Contact Information
	define(LANG_LABEL_CONTACT_INFORMATION, "Informaci�n de contacto");
	//Language
	define(LANG_LABEL_LANGUAGE, "Idioma");
	//Select your main language to contact (when necessary).
	define(LANG_LABEL_LANGUAGETIP, "Seleccione su idioma principal de contacto (si fuera necesario).");
	//First Name
	define(LANG_LABEL_FIRST_NAME, "Nombre");
	//First Name
	define(LANG_LABEL_FIRSTNAME, "Nombre");
	//Last Name
	define(LANG_LABEL_LAST_NAME, "Apellido");
	//Last Name
	define(LANG_LABEL_LASTNAME, "Apellido");
	//Company
	define(LANG_LABEL_COMPANY, "Empresa");
	//Address Line1
	define(LANG_LABEL_ADDRESS1, "L�nea de Direcci�n 1");
	//Address Line2
	define(LANG_LABEL_ADDRESS2, "L�nea de Direcci�n 2");
	//Location Name
	define(LANG_LABEL_LOCATION_NAME, "Nombre de la Ubicaci�n");
	//Event Date
	define(LANG_LABEL_EVENT_DATE, "Fecha del Evento");
	//Description
	define(LANG_LABEL_DESCRIPTION, "Descripci�n");
	//Help Information
	define(LANG_LABEL_HELP_INFORMATION, "Informaci�n de ayuda");
	//Text
	define(LANG_LABEL_TEXT, "Texto");
	//Add Image
	define(LANG_LABEL_ADDIMAGE, "Agregar imagen");
	//Add Image
	define(LANG_LABEL_ADDIMAGES, "Agregar imagen");
	//Edit Image Captions
	define(LANG_LABEL_EDITIMAGECAPTIONS, "Modificar ep�grafes de la imagen");
	//Image File
	define(LANG_LABEL_IMAGEFILE, "Archivo de imagen");
	//Thumb Caption
	define(LANG_LABEL_THUMBCAPTION, "Ep�grafe de la miniatura");
	//Image Caption
	define(LANG_LABEL_IMAGECAPTION, "Ep�grafe de la imagen");
	//Note, your upload may take several minutes depending on the file size and your internet connection speed. Hitting refresh or navigating away from this page will cancel your upload.
	define(LANG_LABEL_NOTEFORGALLERYIMAGE, "Es posible que la carga demore varios minutos, en funci�n del tama�o del archivo y de la velocidad de su conexi�n de Internet. Si cambia de p�gina o si la actualiza, se cancelar� la carga.");
	//Video Snippet Code
	define(LANG_LABEL_VIDEO_SNIPPET_CODE, "Fragmento de c�digo de video");
	//Attach Additional File
	define(LANG_LABEL_ATTACH_ADDITIONAL_FILE, "Adjuntar archivo adicional");
	//Source
	define(LANG_LABEL_SOURCE, "Origen");
	//Hours of work
	define(LANG_LABEL_HOURS_OF_WORK, "Horas de trabajo");
	//Default
	define(LANG_LABEL_DEFAULT, "Valor predeterminado");
	//Payment Method
	define(LANG_LABEL_PAYMENT_METHOD, "Forma de pago");
	//By Credit Card
	define(LANG_LABEL_BY_CREDIT_CARD, "Con Tarjeta de Cr�dito");
	//By PayPal
	define(LANG_LABEL_BY_PAYPAL, "Con PayPal");
	//Print Invoice and Mail a Check
	define(LANG_LABEL_PRINT_INVOICE_AND_MAIL_CHECK, "Imprimir Factura y enviar un Cheque por Correo");
	//Headline
	define(LANG_LABEL_HEADLINE, "Titular");
	//Offer
	define(LANG_LABEL_OFFER, "Oferta");
	//Conditions
	define(LANG_LABEL_CONDITIONS, "Condiciones");
	//Promotion Date
	define(LANG_LABEL_PROMOTION_DATE, "Fecha de la Promoci�n");
	//Promotion Layout
	define(LANG_LABEL_PROMOTION_LAYOUT, "Dise�o de la Promoci�n");
	//Printable Promotion
	define(LANG_LABEL_PRINTABLE_PROMOTION, "Promoci�n imprimible");
	//Our HTML template based promotion
	define(LANG_LABEL_OUR_HTML_TEMPLATE_BASED, "Nuestra promoci�n basada en una plantilla HTML");
	//Fill in the fields above and insert a logo or other image (JPG or GIF)
	define(LANG_LABEL_FILL_FIELDS_ABOVE, "Complete los campos anteriores e inserte un logo u otra imagen (JPG o GIF)");
	//A promotion provided by you instead
	define(LANG_LABEL_PROMOTION_PROVIDED_BY_YOU, "Una promoci�n provista por usted, en su lugar");
	//JPG or GIF image
	define(LANG_LABEL_JPG_GIF_IMAGE, "Imagen JPG o GIF");
	//Comment Title
	define(LANG_LABEL_COMMENTTITLE, "T�tulo");
	//Comment
	define(LANG_LABEL_COMMENT, "Comentario");
	//Accepted
	define(LANG_LABEL_ACCEPTED, "Aceptado");
	//Approved
	define(LANG_LABEL_APPROVED, "Aprobado");
	//Success
	define(LANG_LABEL_SUCCESS, "�xito");
	//Completed
	define(LANG_LABEL_COMPLETED, "Completo");
	//Y
	define(LANG_LABEL_Y, "S");
	//Failed
	define(LANG_LABEL_FAILED, "Con errores");
	//Declined
	define(LANG_LABEL_DECLINED, "Rechazado");
	//failure
	define(LANG_LABEL_FAILURE, "error");
	//Canceled
	define(LANG_LABEL_CANCELED, "Cancelado");
	//Error
	define(LANG_LABEL_ERROR, "Error");
	//Transaction Code
	define(LANG_LABEL_TRANSACTION_CODE, "C�digo de la transacci�n");
	//Subscription ID
	define(LANG_LABEL_SUBSCRIPTION_ID, "Id. de la suscripci�n");
	//transaction history
	define(LANG_LABEL_TRANSACTION_HISTORY, "historial de transacciones");
	//Authorization Code
	define(LANG_LABEL_AUTHORIZATION_CODE, "C�digo de autorizaci�n");
	//Transaction Status
	define(LANG_LABEL_TRANSACTION_STATUS, "Estado de la transacci�n");
	//Transaction Error
	define(LANG_LABEL_TRANSACTION_ERROR, "Error en la transacci�n");
	//Monthly Bill Amount
	define(LANG_LABEL_MONTHLY_BILL_AMOUNT, "Valor de las cuentas mensuales");
	//Transaction OID
	define(LANG_LABEL_TRANSACTION_OID, "OID de la transacci�n");
	//Yearly Bill Amount
	define(LANG_LABEL_YEARLY_BILL_AMOUNT, "Valor de las cuentas anuales");
	//Bill Amount
	define(LANG_LABEL_BILL_AMOUNT, "Valor de las cuentas");
	//Transaction ID
	define(LANG_LABEL_TRANSACTION_ID, "Id. de la transacci�n");
	//Receipt ID
	define(LANG_LABEL_RECEIPT_ID, "Id. de la recepci�n");
	//Subscribe ID
	define(LANG_LABEL_SUBSCRIBE_ID, "Id. de la suscripci�n");
	//Transaction Order ID
	define(LANG_LABEL_TRANSACTION_ORDERID, "Id. de pedido de la transacci�n");
	//your
	define(LANG_LABEL_YOUR, "su");
	//Make Your
	define(LANG_LABEL_MAKE_YOUR, "Haga su");
	//Payment
	define(LANG_LABEL_PAYMENT, "Pago");
	//History
	define(LANG_LABEL_HISTORY, "Historial");
	//Login
	define(LANG_LABEL_LOGIN, "Inicio de sesi�n");
	//Transaction canceled
	define(LANG_LABEL_TRANSACTION_CANCELED, "Se cancel� la transacci�n");
	//Transaction amount
	define(LANG_LABEL_TRANSACTION_AMOUNT, "Valor de la transacci�n");
	//Pay
	define(LANG_LABEL_PAY, "Pagar");
	//Back
	define(LANG_LABEL_BACK, "Volver");
	//Total Price
	define(LANG_LABEL_TOTAL_PRICE, "Precio total");
	//Pay By Invoice
	define(LANG_LABEL_PAY_BY_INVOICE, "Pagar con Factura");
	//Administrator
	define(LANG_LABEL_ADMINISTRATOR, "Administrador");
	//Billing Info
	define(LANG_LABEL_BILLING_INFO, "Informaci�n de Cuentas");
	//Card Number
	define(LANG_LABEL_CARD_NUMBER, "N�mero de Tarjeta");
	//Card Expire date
	define(LANG_LABEL_CARD_EXPIRE_DATE, "Fecha de vencimiento de la Tarjeta");
	//Card Code
	define(LANG_LABEL_CARD_CODE, "C�digo de la Tarjeta");
	//Customer Info
	define(LANG_LABEL_CUSTOMER_INFO, "Informaci�n del Cliente");
	//zip
	define(LANG_LABEL_ZIP, "c�digo postal");
	//Place Order and Continue
	define(LANG_LABEL_PLACE_ORDER_CONTINUE, "Pedir y continuar");
	//General Information
	define(LANG_LABEL_GENERAL_INFORMATION, "Informaci�n General");
	//Phone Number
	define(LANG_LABEL_PHONE_NUMBER, "N�mero de Tel�fono");
	//E-mail Address
	define(LANG_LABEL_EMAIL_ADDRESS, "Direcci�n de Correo Electr�nico");
	//Credit Card Information
	define(LANG_LABEL_CREDIT_CARD_INFORMATION, "Informaci�n de la Tarjeta de Cr�dito");
	//Exp. Date
	define(LANG_LABEL_EXP_DATE, "Fecha de Vencimiento");
	//Customer Information
	define(LANG_LABEL_CUSTOMER_INFORMATION, "Informaci�n del Cliente");
	//Card Expiration
	define(LANG_LABEL_CARD_EXPIRATION, "Vencimiento de la Tarjeta");
	//Name on Card
	define(LANG_LABEL_NAME_ON_CARD, "Nombre que figura en la Tarjeta");
	//Card Type
	define(LANG_LABEL_CARD_TYPE, "Tipo de Tarjeta");
	//Card Verification Number
	define(LANG_LABEL_CARD_VERIFICATION_NUMBER, "N�mero de Verificaci�n de la Tarjeta");
	//Province
	define(LANG_LABEL_PROVINCE, "Provincia");
	//Postal Code
	define(LANG_LABEL_POSTAL_CODE, "C�digo Postal");
	//Post Code
	define(LANG_LABEL_POST_CODE, "C�digo Postal");
	//Tel
	define(LANG_LABEL_TEL, "Tel.");
	//Select Date
	define(LANG_LABEL_SELECTDATE, "Seleccionar fecha");
	//Found
	define(LANG_PAGING_FOUND, "Se encontr�");
	//Found
	define(LANG_PAGING_FOUND_PLURAL, "Se encontraron");
	//record
	define(LANG_PAGING_RECORD, "registro");
	//records
	define(LANG_PAGING_RECORD_PLURAL, "registros");
	//Showing page
	define(LANG_PAGING_SHOWINGPAGE, "Mostrando p�gina");
	//of
	define(LANG_PAGING_PAGEOF, "de");
	//pages
	define(LANG_PAGING_PAGE_PLURAL, "p�ginas");
	//Go to page:
	define(LANG_PAGING_GOTOPAGE, "Ir a la p�gina:");
	//previous page
	define(LANG_PAGING_PREVIOUSPAGE, "p�gina anterior");
	//next page
	define(LANG_PAGING_NEXTPAGE, "p�gina siguiente");
	//"previous" page
	define(LANG_PAGING_PREVIOUSPAGEMOBILE, "anterior");
	//"next" page
	define(LANG_PAGING_NEXTPAGEMOBILE, "siguiente");
	//Article successfully added!
	define(LANG_MSG_ARTICLE_SUCCESSFULLY_ADDED, "Se agreg� correctamente el Art�culo");
	//Banner successfully added!
	define(LANG_MSG_BANNER_SUCCESSFULLY_ADDED, "Se agreg� correctamente el Banner");
	//Classified successfully added!
	define(LANG_MSG_CLASSIFIED_SUCCESSFULLY_ADDED, "Se agreg� correctamente el Clasificado");
	//Event successfully added!
	define(LANG_MSG_EVENT_SUCCESSFULLY_ADDED, "Se agreg� correctamente el Evento");
	//Gallery successfully added!
	define(LANG_MSG_GALLERY_SUCCESSFULLY_ADDED, "Se agreg� correctamente la galer�a");
	//Listing successfully added!
	define(LANG_MSG_LISTING_SUCCESSFULLY_ADDED, "Se agreg� correctamente la Lista");
	//Promotion successfully added!
	define(LANG_MSG_PROMOTION_SUCCESSFULLY_ADDED, "Se agreg� correctamente la Promoci�n.");
	//Article successfully updated!
	define(LANG_MSG_ARTICLE_SUCCESSFULLY_UPDATED, "Se actualiz� correctamente el Art�culo.");
	//Banner successfully updated!
	define(LANG_MSG_BANNER_SUCCESSFULLY_UPDATED, "Se actualiz� correctamente el Banner.");
	//Classified successfully updated!
	define(LANG_MSG_CLASSIFIED_SUCCESSFULLY_UPDATED, "Se actualiz� correctamente el Clasificado.");
	//Event successfully updated!
	define(LANG_MSG_EVENT_SUCCESSFULLY_UPDATED, "Se actualiz� correctamente el Evento.");
	//Gallery successfully updated!
	define(LANG_MSG_GALLERY_SUCCESSFULLY_UPDATED, "Se actualiz� correctamente la galer�a.");
	//Listing successfully updated!
	define(LANG_MSG_LISTING_SUCCESSFULLY_UPDATED, "Se actualiz� correctamente la Lista.");
	//Promotion successfully updated!
	define(LANG_MSG_PROMOTION_SUCCESSFULLY_UPDATED, "Se actualiz� correctamente la Promoci�n.");
	//Map Tuning successfully updated!
	define(LANG_MSG_MAPTUNING_SUCCESSFULLY_UPDATED, "Se actualiz� correctamente el Ajuste de mapa.");
	//Gallery successfully changed!
	define(LANG_MSG_GALLERY_SUCCESSFULLY_CHANGED, "Se modific� correctamente la galer�a.");
	//Promotion successfully changed!
	define(LANG_MSG_PROMOTION_SUCCESSFULLY_CHANGED, "Se modific� correctamente la Promoci�n.");
	//Banner successfully deleted!
	define(LANG_MSG_BANNER_SUCCESSFULLY_DELETED, "Se elimin� correctamente el Banner.");
	//Invalid image type. Please insert one image JPG or GIF
	define(LANG_MSG_INVALID_IMAGE_TYPE, "Tipo de imagen no v�lido. Por favor inserte una imagen JPG o GIF");
	//Attached file was denied. Invalid file type.
	define(LANG_MSG_ATTACHED_FILE_DENIED, "Se rechaz� el archivo adjunto. Tipo de archivo no v�lido.");
	//Click here to view this gallery
	define(LANG_MSG_CLICK_TO_VIEW_GALLERY, "Haga clic aqu� para ver esta galer�a");
	//Click here to manage this gallery images
	define(LANG_MSG_CLICKTOMANAGEGALLERYIMAGES, "Haga clic aqu� para administrar las im�genes de esta galer�a");
	//Please type your username.
	define(LANG_MSG_TYPE_USERNAME, "Escriba su nombre de usuario.");
	//Username was not found.
	define(LANG_MSG_USERNAME_WAS_NOT_FOUND, "No se encontr� el nombre de usuario.");
	//Please try again or contact support at:
	define(LANG_MSG_TRY_AGAIN_OR_CONTACT_SUPPORT, "Intente nuevamente o p�ngase en contacto con el soporte en:");
	//System Forgotten Password is disabled.
	define(LANG_MSG_FORGOTTEN_PASSWORD_DISABLED, "El sistema de contrase�a olvidada est� desactivado.");
	//Please contact support at:
	define(LANG_MSG_CONTACT_SUPPORT, "P�ngase en contacto con el soporte en:");
	//Thank you!
	define(LANG_MSG_THANK_YOU, "Gracias");
	//An e-mail was sent to the account holder with instructions to obtain a new password
	define(LANG_MSG_EMAIL_WAS_SENT_TO_ACCOUNT_HOLDER, "Se envi� un mensaje de correo electr�nico al titular de la cuenta con instrucciones para obtener una nueva contrase�a");
	//File not found!
	define(LANG_MSG_FILE_NOT_FOUND, "No se encontr� el archivo");
	//Error! No Thumb Image!
	define(LANG_MSG_ERRORNOTHUMBIMAGE, "Error. No hay imagen en miniatura");
	//No Images have been uploaded into this gallery yet!
	define(LANG_MSG_NOIMAGESUPLOADEDYET, "A�n no se cargaron im�genes en esta galer�a");
	//Click here to print the invoice
	define(LANG_MSG_CLICK_TO_PRINT_INVOICE, "Haga clic aqu� para imprimir la factura");
	//Click here to view the invoice detail
	define(LANG_MSG_CLICK_TO_VIEW_INVOICE_DETAIL, "Haga clic aqu� para ver el detalle de la factura");
	//(prices amount are per installments)
	define(LANG_MSG_PRICES_AMOUNT_PER_INSTALLMENTS, "(los precios son por instalaci�n)");
	//Unpaid Item
	define(LANG_MSG_UNPAID_ITEM, "Elemento sin pagar");
	//No Check Out Needed
	define(LANG_MSG_NO_CHECKOUT_NEEDED, "No se necesita pagar");
	//(Move the mouse over the bars to see more details about the graphic)
	define(LANG_MSG_MOVE_MOUSEOVER_THE_BARS, "(Pase el mouse sobre las barras para ver m�s detalles sobre el gr�fico)");
	//(Click the report type to display graph)
	define(LANG_MSG_CLICK_REPORT_TYPE, "(Haga clic en el tipo de informe para mostrar el gr�fico)");
	//Click here to view this review
	define(LANG_MSG_CLICK_TO_VIEW_THIS_REVIEW, "Haga clic aqu� para ver esta calificaci�n");
	//Click here to edit this review
	define(LANG_MSG_CLICK_TO_EDIT_THIS_REVIEW, "Haga clic aqu� para modificar esta calificaci�n");
	//Click here to delete this review
	define(LANG_MSG_CLICK_TO_DELETE_THIS_REVIEW, "Haga clic aqu� para eliminar esta calificaci�n");
	//Waiting Site Manager approve
	define(LANG_MSG_WAITINGSITEMGRAPPROVE, "Esperando la aprobaci�n del administrador del sitio");
	//Review already approved
	define(LANG_MSG_REVIEW_ALREADY_APPROVED, "La calificaci�n ya est� aprobada");
	//Reply
	define(LANG_REPLY, "Responder");
	//Response already approved
	define(LANG_MSG_RESPONSE_ALREADY_APPROVED, "Respuesta ya aprobada");
	//Reply successfully sent!
	define(LANG_REPLY_SUCCESSFULLY, "La respuesta se ha enviado con �xito!");
	//Please type a valid reply!
	define(LANG_REPLY_EMPTY, "Por favor, escriba una respuesta v�lida!");
	//Click here to reply this review
	define(LANG_MSG_REVIEW_REPLY, "Haga clic aqu� para responder esta calificaci�n");
	//Click here to view the transaction
	define(LANG_MSG_CLICK_TO_VIEW_TRANSACTION, "Haga clic aqu� para ver la transacci�n");
	//Username must be between
	define(LANG_MSG_USERNAME_MUST_BE_BETWEEN, "El nombre de usuario debe tener entre");
	//characters with no spaces.
	define(LANG_MSG_CHARACTERS_WITH_NO_SPACES, "caracteres, sin espacios.");
	//Password must be between
	define(LANG_MSG_PASSWORD_MUST_BE_BETWEEN, "La contrase�a debe tener entre");
	//Type you password here if you want to change it.
	define(LANG_MSG_TIPE_YOUR_PASSWORD_HERE_IF_YOU_WANT_TO_CHANGE_IT, "Escriba aqu� su contrase�a si desea modificarla.");
	//Password is going to be sent to Member E-mail Address.
	define(LANG_MSG_PASSWORD_SENT_TO_MEMBER_EMAIL, "Se enviar� la contrase�a a la direcci�n de correo electr�nico del miembro.");
	//Please write down your username and password for future reference.
	define(LANG_MSG_WRITE_DOWN_YOUR_USERNAME_PASSWORD, "Tome nota de su nombre de usuario y contrase�a para referencia.");
	//I agree with the terms of use
	define(LANG_MSG_AGREE_WITH_TERMS_OF_USE, "Acepto los t�rminos de uso");
	//successfully added
	define(LANG_MSG_CATEGORY_SUCCESSFULLY_ADDED, "se agreg� correctamente");
	//This category was already inserted
	define(LANG_MSG_CATEGORY_ALREADY_INSERTED, "Esta categor�a ya se insert�");
	//Please, select a valid category
	define(LANG_MSG_SELECT_VALID_CATEGORY, "Seleccione una categor�a v�lida");
	//Please, select a category first
	define(LANG_MSG_SELECT_CATEGORY_FIRST, "Seleccione una categor�a en primer lugar");
	//You can choose a page name title to be accessed directly from the web browser as a static html page. The chosen page name title must contain only alphanumeric chars (like "a-z" and/or "0-9") and "-" instead of spaces.
	define(LANG_MSG_FRIENDLY_URL1, "Puede elegir un t�tulo para la p�gina de modo que se acceda a ella directamente desde el navegador web, como una p�gina html est�tica. El t�tulo elegido debe contener �nicamente caracteres alfanum�ricos (como \"a-z\" o \"0-9\") y \"-\" en lugar de espacios.");
	//The page name title "John Auto Repair" will be available through the url:
	define(LANG_MSG_FRIENDLY_URL2, "El t�tulo de la p�gina \"Taller de reparaciones Juan\" estar� disponible mediante la direcci�n URL:");
	//"Additional images may be added to the" [GALLERYIMAGE] gallery (If it is enabled).
	define(LANG_MSG_ADDITIONAL_IMAGES_MAY_BE_ADDED, "Se puede agregar im�genes adicionales a la");
	//Additional images may be added to the [GALLERYIMAGE] "gallery (If it is enabled)."
	define(LANG_MSG_ADDITIONAL_IMAGES_IF_ENABLED, "galer�a (si est� activada).");
	//Max file size
	define(LANG_MSG_MAX_FILE_SIZE, "Tama�o m�ximo de archivo");
	//Transparent .gif not supported
	define(LANG_MSG_TRANSPARENTGIF_NOT_SUPPORTED, "No se admiten archivos .gif con transparencias");
	//Check this box to remove your existing image
	define(LANG_MSG_CHECK_TO_REMOVE_IMAGE, "Marque esta casilla para quitar su imagen actual");
	//max 250 characters
	define(LANG_MSG_MAX_250_CHARS, "m�ximo 250 caracteres");
	//characters left
	define(LANG_MSG_CHARS_LEFT, "caracteres restantes");
	//(including spaces and line breaks)
	define(LANG_MSG_INCLUDING_SPACES_LINE_BREAKS, "(incluidos espacios y saltos de l�nea)");
	//Include up to
	define(LANG_MSG_INCLUDE_UP_TO_KEYWORDS, "Incluir hasta");
	//keywords with a maximum of 50 characters each.
	define(LANG_MSG_KEYWORDS_WITH_MAXIMUM_50, "palabras clave, de no m�s de 50 caracteres cada una.");
	//Add one keyword or keyword phrase per line. For example:
	define(LANG_MSG_KEYWORD_PER_LINE, "Agregue una palabra o frase clave por l�nea. Por ejemplo:");
	//Only select sub-categories that directly apply to your type.
	define(LANG_MSG_ONLY_SELECT_SUBCATEGS, "Seleccione �nicamente subcategor�as que se apliquen directamente a su tipo.");
	//Your article will automatically appear in the main category of each sub-category you select.
	define(LANG_MSG_ARTICLE_AUTOMATICALLY_APPEAR, "Su articulo aparecer� autom�ticamente en la categor�a principal de cada subcategor�a que seleccione.");
	//max 25 characters
	define(LANG_MSG_MAX_25_CHARS, "m�ximo 25 caracteres");
	//max 500 characters
	define(LANG_MSG_MAX_500_CHARS, "m�ximo 500 caracteres");
	//Allowed file types
	define(LANG_MSG_ALLOWED_FILE_TYPES, "Tipos de archivo permitidos");
	//Click here to preview this listing
	define(LANG_MSG_CLICK_TO_PREVIEW_THIS_LISTING, "Haga clic aqu� para tener una vista previa de la lista");
	//Click here to preview this event
	define(LANG_MSG_CLICK_TO_PREVIEW_THIS_EVENT, "Haga clic aqu� para tener una vista previa de este evento");
	//Click here to preview this classified
	define(LANG_MSG_CLICK_TO_PREVIEW_THIS_CLASSIFIED, "Haga clic aqu� para tener una vista previa de este clasificado");
	//Click here to preview this article
	define(LANG_MSG_CLICK_TO_PREVIEW_THIS_ARTICLE, "Haga clic aqu� para tener una vista previa de este art�culo");
	//Click here to preview this banner
	define(LANG_MSG_CLICK_TO_PREVIEW_THIS_BANNER, "Haga clic aqu� para tener una vista previa de este banner");
	//Click here to preview this promotion
	define(LANG_MSG_CLICK_TO_PREVIEW_THIS_PROMOTION, "Haga clic aqu� para tener una vista previa de esta promoci�n");
	//Click here to preview this gallery
	define(LANG_MSG_CLICK_TO_PREVIEW_THIS_GALLERY, "Haga clic aqu� para tener una vista previa de esta galer�a");
	//max 30 characters
	define(LANG_MSG_MAX_30_CHARS, "m�ximo 30 caracteres");
	//Select a Country
	define(LANG_MSG_SELECT_A_COUNTRY, "Seleccione un pa�s");
	//Select a State
	define(LANG_MSG_SELECT_A_STATE, "Seleccione un estado");
	//Select a City
	define(LANG_MSG_SELECT_A_CITY, "Seleccione una ciudad");
	//(This information will not be displayed publicly)
	define(LANG_MSG_INFO_NOT_DISPLAYED, "(Esta informaci�n no se mostrar� al p�blico)");
	//Your event will automatically appear in the main category of each sub-category you select.
	define(LANG_MSG_EVENT_AUTOMATICALLY_APPEAR, "Su evento aparecer� autom�ticamente en la categor�a principal de cada subcategor�a que seleccione.");
	//Please select a state first
	define(LANG_MSG_SELECT_STATE_FIRST, "Seleccione un estado en primer lugar");
	//Click here if you do not see your city.
	define(LANG_MSG_CLICK_TO_SEE_YOUR_CITY, "Haga clic aqu� si no puede ver su ciudad.");
	//If video snippet code was filled in, it will appear on the detail page
	define(LANG_MSG_VIDEO_SNIPPET_CODE, "Si el fragmento de c�digo de video se complet�, aparecer� en la p�gina de detalles");
	//Max video code size supported
	define(LANG_MSG_MAX_VIDEO_CODE_SIZE, "Tama�o m�ximo de c�digo de video admitido");
	//If the video code size is bigger than supported video size, it will be modified.
	define(LANG_MSG_VIDEO_MODIFIED, "Si el tama�o de c�digo de video es mayor que el tama�o de video admitido, ser� modificado.");
	//Attachment has no caption
	define(LANG_MSG_ATTACHMENT_HAS_NO_CAPTION, "El adjunto no tiene ep�grafe");
	//Check this box to remove existing listing attachment
	define(LANG_MSG_CLICK_TO_REMOVE_ATTACHMENT, "Marque esta casilla para quitar el adjunto de la lista existente");
	//Add one phrase per line. For example
	define(LANG_MSG_PHRASE_PER_LINE, "Agregue una frase por l�nea. Por ejemplo:");
	//Extra categories/sub-categories cost an
	define(LANG_MSG_EXTRA_CATEGORIES_COST, "Las categor�as o subcategor�as extra cuestan un");
	//additional
	define(LANG_MSG_ADDITIONAL, "adicional");
	//each. Be seen!
	define(LANG_MSG_BE_SEEN, "cada una. Es visto.");
	//Your listing will automatically appear in the main category of each sub-category you select.
	define(LANG_MSG_LISTING_AUTOMATICALLY_APPEAR, "Su lista aparecer� autom�ticamente en la categor�a principal de cada subcategor�a que seleccione.");
	//Request your listing to be considered for the following designations.
	define(LANG_MSG_REQUEST_YOUR_LISTING, "Solicite que su lista sea tenida en cuenta para las siguientes designaciones.");
	//Click here to select date
	define(LANG_MSG_CLICK_TO_SELECT_DATE, "Haga clic aqu� para seleccionar la fecha");
	//"Click on the" gallery icon below if you wish to add photos to your photo gallery.
	define(LANG_LISTING_CLICK_GALLERY_BELOW, "Haga clic en el");
	//Click on the "gallery icon" below if you wish to add photos to your photo gallery.
	define(LANG_LISTING_GALLERY_ICON, "icono de la galer�a");
	//Click on the gallery icon "below if you wish to add photos to your photo gallery."
	define(LANG_LISTING_IFYOUWISHADDPHOTOS, "situado m�s abajo, si desea agregar fotos a su galer�a de fotos.");
	//You can add promotion to your listing by clicking on the link
	define(LANG_LISTING_YOUCANADDPROMOTION, "Puede agregar la promoci�n a su lista haciendo clic en el v�nculo");
	//add promotion
	define(LANG_LISTING_ADDPROMOTION, "agregar promoci�n");
	//All pages but item pages
	define(LANG_ALLPAGESBUTITEMPAGES, "Todas las p�ginas menos las p�ginas de elementos");
	//Non-category search
	define(LANG_NONCATEGORYSEARCH, "B�squeda sin categor�as");
	//promotion
	define(LANG_ICONPROMOTION, "promoci�n");
	//e-mail to friend
	define(LANG_ICONEMAILTOFRIEND, "enviar a un amigo");
	//add to quick list
	define(LANG_ICONQUICKLIST_ADD, "agregar a lista r�pida");
	//print
	define(LANG_ICONPRINT, "imprimir");
	//map
	define(LANG_ICONMAP, "mapa");
	//Add to
	define(LANG_ADDTO_SOCIALBOOKMARKING, "A�adir a");
	//Google maps are not available. Please contact the administrator.
	define(LANG_GOOGLEMAPS_NOTAVAILABLE_CONTACTADM, "No hay mapas de Google. P�ngase en contacto con el administrador.");
	//Remove
	define(LANG_QUICKLIST_REMOVE, "Quitar");
	//Favorite Articles
	define(LANG_FAVORITE_ARTICLE, "Art�culos R�pidos");
	//Favorite Classifieds
	define(LANG_FAVORITE_CLASSIFIED, "Clasificados R�pidos");
	//Favorite Events
	define(LANG_FAVORITE_EVENT, "Eventos R�pidos");
	//Favorite Listings
	define(LANG_FAVORITE_LISTING, "Listas R�pidas");
	//Favorite Promotions
	define(LANG_FAVORITE_PROMOTION, "Promociones R�pidas");
	//Published
	define(LANG_ARTICLE_PUBLISHED, "Publicado");
	//More Info
	define(LANG_CLASSIFIED_MOREINFO, "M�s informaci�n");
	//Date
	define(LANG_EVENT_DATE, "Fecha");
	//Time
	define(LANG_EVENT_TIME, "Hora");
	//Get driving directions
	define(LANG_EVENT_DRIVINGDIRECTIONS, "Obtener indicaciones para llegar");
	//Website
	define(LANG_EVENT_WEBSITE, "Sitio web");
	//t
	define(LANG_EVENT_LETTERPHONE, "t");
	//More
	define(LANG_EVENT_MORE, "M�s");
	//More Info
	define(LANG_EVENT_MOREINFO, "M�s informaci�n");
	//View all categories
	define(LANG_LISTING_VIEWALLCATEGORIES, "Ver todas las categor�as");
	//More Info
	define(LANG_LISTING_MOREINFO, "M�s informaci�n");
	//view phone
	define(LANG_LISTING_VIEWPHONE, "ver tel�fono");
	//view fax
	define(LANG_LISTING_VIEWFAX, "ver fax");
	//Click here to see more info!
	define(LANG_LISTING_ATTACHMENT, "Haga clic aqu� para obtener m�s informaci�n.");
	//Complete the form below to contact us.
	define(LANG_LISTING_CONTACTTITLE, "Complete el siguiente formulario para ponerse en contacto con nosotros.");
	//t
	define(LANG_LISTING_LETTERPHONE, "t");
	//f
	define(LANG_LISTING_LETTERFAX, "f");
	//w
	define(LANG_LISTING_LETTERWEBSITE, "w");
	//e
	define(LANG_LISTING_LETTEREMAIL, "e");
	//offers the following products and/or services:
	define(LANG_LISTING_OFFERS, "ofrece los siguientes productos y servicios:");
	//Hours of work
	define(LANG_LISTING_HOURS_OF_WORK, "Horas de trabajo");
	//No review comment found for this item!
	define(LANG_REVIEW_NORECORD,"�No se encontraron comentarios para este elemento!");
	//Review
	define(LANG_REVIEW, "Calificaci�n");
	//Reviews
	define(LANG_REVIEW_PLURAL, "Calificaciones");
	//Reviews
	define(LANG_REVIEWTITLE, "Calificaciones");
	//review
	define(LANG_REVIEWCOUNT, "calificaci�n");
	//reviews
	define(LANG_REVIEWCOUNT_PLURAL, "calificaciones");
	//Related Categories
	define(LANG_RELATEDCATEGORIES, "Categor�as relacionadas");
	//Subcategories
	define(LANG_LISTING_SUBCATEGORIES, "Subcategor�as");
	//See comments
	define(LANG_REVIEWSEECOMMENTS, "Ver comentarios");
	//Rate it!
	define(LANG_REVIEWRATEIT, "Calificar");
	//Be the first to review this listing!
	define(LANG_REVIEWBETHEFIRST, "Sea el primero en calificar la lista");
	//Offered by
	define(LANG_PROMOTION_OFFEREDBY, "Ofrecido por");
	//More Info
	define(LANG_PROMOTION_MOREINFO, "M�s informaci�n");
	//Valid from
	define(LANG_PROMOTION_VALIDFROM, "V�lido de");
	//to
	define(LANG_PROMOTION_VALIDTO, "a");
	//Print Promotion
	define(LANG_PROMOTION_PRINT, "Imprimir");
	//Article
	define(LANG_ARTICLE_FEATURE_NAME, "Art�culo");
	//Articles
	define(LANG_ARTICLE_FEATURE_NAME_PLURAL, "Art�culos");
	//Banner
	define(LANG_BANNER_FEATURE_NAME, "Banner");
	//Banners
	define(LANG_BANNER_FEATURE_NAME_PLURAL, "Banners");
	//Classified
	define(LANG_CLASSIFIED_FEATURE_NAME, "Clasificado");
	//Classifieds
	define(LANG_CLASSIFIED_FEATURE_NAME_PLURAL, "Clasificados");
	//Event
	define(LANG_EVENT_FEATURE_NAME, "Evento");
	//Events
	define(LANG_EVENT_FEATURE_NAME_PLURAL, "Eventos");
	//Listing
	define(LANG_LISTING_FEATURE_NAME, "Lista");
	//Listings
	define(LANG_LISTING_FEATURE_NAME_PLURAL, "Listas");
	//Promotion
	define(LANG_PROMOTION_FEATURE_NAME, "Promoci�n");
	//Promotions
	define(LANG_PROMOTION_FEATURE_NAME_PLURAL, "Promociones");
	//Send
	define(LANG_BUTTON_SEND, "Enviar");
	//Sign Up
	define(LANG_BUTTON_SIGNUP, "Registrarse");
	//View Category Path
	define(LANG_BUTTON_VIEWCATEGORYPATH, "Ver ruta de las categor�as");
	//Remove Selected Category
	define(LANG_BUTTON_REMOVESELECTEDCATEGORY, "Quitar categor�a");
	//Continue
	define(LANG_BUTTON_CONTINUE, "Continuar");
	//Cancel
	define(LANG_BUTTON_CANCEL, "Cancelar");
	//Log In
	define(LANG_BUTTON_LOGIN, "Iniciar");
	//Save Map Tuning
	define(LANG_BUTTON_SAVE_MAP_TUNING, "Guardar ajuste de mapa");
	//Clear Map Tuning
	define(LANG_BUTTON_CLEAR_MAP_TUNING, "Borrar ajuste de mapa");
	//Next
	define(LANG_BUTTON_NEXT, "Siguiente");
	//Pay By CreditCard
	define(LANG_BUTTON_PAY_BY_CREDIT_CARD, "Pagar con Tarjeta de Cr�dito");
	//Pay By PayPal
	define(LANG_BUTTON_PAY_BY_PAYPAL, "Pagar con PayPal");
	//Search
	define(LANG_BUTTON_SEARCH, "Buscar");
	//Advanced Search
	define(LANG_BUTTON_ADVANCEDSEARCH, "B�squeda Avanzada");
	//Clear
	define(LANG_BUTTON_CLEAR, "Borrar");
	//Add your Article
	define(LANG_BUTTON_ADDARTICLE, "Agregue su Art�culo");
	//Add your Classified
	define(LANG_BUTTON_ADDCLASSIFIED, "Agregue su Clasificado");
	//Add your Event
	define(LANG_BUTTON_ADDEVENT, "Agregue su Evento");
	//Add your Listing
	define(LANG_BUTTON_ADDLISTING, "Agregue su Lista");
	//Add your Promotion
	define(LANG_BUTTON_ADDPROMOTION, "Agregue su Promoci�n");
	//Home
	define(LANG_BUTTON_HOME, "Inicio");
	//Manage Account
	define(LANG_BUTTON_MANAGE_ACCOUNT, "Administrar cuenta");
	//Help
	define(LANG_BUTTON_HELP, "Ayuda");
	//Logout
	define(LANG_BUTTON_LOGOUT, "Cerrar sesi�n");
	//Submit
	define(LANG_BUTTON_SUBMIT, "Enviar");
	//Update
	define(LANG_BUTTON_UPDATE, "Actualizar");
	//Back
	define(LANG_BUTTON_BACK, "Volver");
	//Delete
	define(LANG_BUTTON_DELETE, "Eliminar");
	//Complete the Process
	define(LANG_BUTTON_COMPLETE_THE_PROCESS, "Completar el proceso");
	//Please enter the text you see in the image at the left into the textbox. This is required to prevent automated submission of contact requests.
	define(LANG_CAPTCHA_HELP, "Escriba el texto de la imagen situada a la izquierda en el cuadro de texto. Esto es necesario para evitar el env�o automatizado de solicitudes de contacto.");
	//Verification Code image cannot be displayed
	define(LANG_CAPTCHA_ALT, "No se puede mostrar la imagen del c�digo de verificaci�n");
	//Verification Code
	define(LANG_CAPTCHA_TITLE, "C�digo de verificaci�n");
	//Please select a rating for this item
	define(LANG_MSG_REVIEW_SELECTRATING, "Seleccione una calificaci�n para este elemento");
	//Fraud detected! Please select a rating for this item!
	define(LANG_MSG_REVIEW_FRAUD_SELECTRATING, "Se detect� un fraude. Seleccione una calificaci�n para este elemento.");
	//"Comment" and "Comment Title" are required to post a comment!
	define(LANG_MSG_REVIEW_COMMENTREQUIRED, "Se requiere el \"Comentario\" y el \"T�tulo del comentario\" para enviar un comentario.");
	//"Name" and "E-mail" are required to post a comment!
	define(LANG_MSG_REVIEW_NAMEEMAILREQUIRED, "Se requiere el \"Nombre\" y el \"Correo Electr�nico\" para enviar un comentario.");
	//Please type a valid e-mail address!
	define(LANG_MSG_REVIEW_TYPEVALIDEMAIL, "Escriba una direcci�n de correo electr�nico v�lida.");
	//You have already given your opinion on this item. Thank you.
	define(LANG_MSG_REVIEW_YOUALREADYGIVENOPINION, "Ya calific� el Elemento. Gracias.");
	//Thanks for the feedback!
	define(LANG_MSG_REVIEW_THANKSFEEDBACK, "Gracias por sus comentarios.");
	//Your review has been submitted for approval.
	define(LANG_MSG_REVIEW_REVIEWSUBMITTEDAPPROVAL, "Se envi� su revisi�n y se evaluar� su aprobaci�n.");
	//No payment method was selected!
	define(LANG_MSG_NO_PAYMENT_METHOD_SELECTED, "No se seleccion� una forma de pago.");
	//Wrong credit card expiration date. Please, try again.
	define(LANG_MSG_WRONG_CARD_EXPIRATION_TRY_AGAIN, "La fecha de vencimiento de la Tarjeta de Cr�dito es err�nea. Intente nuevamente.");
	//Click here to try again
	define(LANG_MSG_CLICK_HERE_TO_TRY_AGAIN, "Haga clic aqu� para intentar nuevamente");
	//Payment transactions may not occur immediately.
	define(LANG_MSG_TRANSACTIONS_MAY_NOT_OCCUR_IMMEDIATELY, "Es posible que las transacciones de pago no tengan lugar inmediatamente.");
	//After your payment is processed, information about your transaction
	define(LANG_MSG_AFTER_PAYMENT_IS_PROCESSED_INFO_ABOUT, "Despu�s de que se haya procesado el pago, la informaci�n acerca de su transacci�n");
	//may be found in your transaction history.
	define(LANG_MSG_MAY_BE_FOUND_IN_TRANSACTION_HISTORY, "se podr� encontrar en el historial de transacciones.");
	//"may be found in your" transaction history
	define(LANG_MSG_MAY_BE_FOUND_IN_YOUR, "se podr� encontrar en el");
	//The payment gateway is not available currently
	define(LANG_MSG_PAYMENT_GATEWAY_NOT_AVAILABLE, "La puerta de enlace del pago no est� actualmente disponible");
	//The payment parameters could not be validated
	define(LANG_MSG_PAYMENT_INVALID_PARAMS, "No se pudieron validar los par�metros del pago");
	//Internal gateway error was encountered
	define(LANG_MSG_INTERNAL_GATEWAY_ERROR, "Error en la puerta de enlace interna");
	//Information about your transaction may be found
	define(LANG_MSG_INFO_ABOUT_TRANSACTION_MAY_BE_FOUND, "La informaci�n acerca de su transacci�n se podr� encontrar");
	//in your transaction history.
	define(LANG_MSG_IN_YOUR_TRANSACTION_HISTORY, "en el historial de transacciones.");
	//in your
	define(LANG_MSG_IN_YOUR, "en el");
	//No Transaction ID
	define(LANG_MSG_NO_TRANSACTION_ID, "No hay Id. de la transacci�n");
	//System failure, please try again.
	define(LANG_MSG_SYSTEM_FAILURE_TRY_AGAIN, "Error del sistema, intente nuevamente.");
	//Please, fill in all required fields.
	define(LANG_MSG_FILL_ALL_REQUIRED_FIELDS, "Complete todos los campos requeridos.");
	//Could not connect.
	define(LANG_MSG_COULD_NOT_CONNECT, "No se pudo conectar.");
	//Thank you for setting up your items and for making the payment!
	define(LANG_MSG_THANKS_FOR_MAKING_THE_PAYMENT, "Gracias por configurar sus elementos y realizar el pago.");
	//Site manager will review your items and set it live within 2 working days.
	define(LANG_MSG_SITEMGR_WILL_REVIEW_YOUR_ITEMS, "El administrador del sitio revisar� sus elementos y los activar� dentro de los siguientes dos d�as laborables.");
	//The payment gateway could not respond
	define(LANG_MSG_PAYMENT_GATEWAY_COULD_NOT_RESPOND, "La puerta de enlace de pago no respondi�");
	//Pending payments may take 3 to 4 days to be approved.
	define(LANG_MSG_PENDING_PAYMENTS_TAKE_3_4_DAYS_TO_BE_APPROVED, "Es posible que los pagos pendientes demoren entre 3 y 4 d�as en ser aprobados.");
	//Connection Failure
	define(LANG_MSG_CONNECTION_FAILURE, "Error de conexi�n");
	//Please, fill correctly zip.
	define(LANG_MSG_FILL_CORRECTLY_ZIP, "Complete correctamente el c�digo postal.");
	//Please, fill correctly card verification number.
	define(LANG_MSG_FILL_CORRECTLY_CARD_VERIF_NUMBER, "Complete correctamente el n�mero de verificaci�n de la tarjeta.");
	//Card Type and Card Verification Number do not match.
	define(LANG_MSG_CARD_TYPE_VERIF_NUMBER_DO_NOT_MATCH, "El tipo de la tarjeta y el n�mero de identificaci�n de la tarjeta no coinciden.");
	//Transaction Not Completed.
	define(LANG_MSG_TRANSACTION_NOT_COMPLETED, "No se complet� la transacci�n.");
	//Error Number:
	define(LANG_MSG_ERROR_NUMBER, "N�mero de error:");
	//Short Message
	define(LANG_MSG_SHORT_MESSAGE, "Mensaje corto:");
	//Long Message
	define(LANG_MSG_LONG_MESSAGE, "Mensaje largo:");
	//Transaction Completed Succesfully.
	define(LANG_MSG_TRANSACTION_COMPLETED_SUCCESSFULLY, "Se complet� correctamente la transacci�n.");
	//Card expire date must be in the future
	define(LANG_MSG_CARD_EXPIRE_DATE_IN_FUTURE, "La fecha de vencimiento de la tarjeta debe estar en el futuro");
	//If your transaction was confirmed, information about it may be found in
	define(LANG_MSG_IF_TRANSACTION_WAS_CONFIRMED, "Si se confirm� la transacci�n, podr� encontrar informaci�n acerca de ella en");
	//your transaction history after your payment is processed.
	define(LANG_MSG_YOUR_TRANSACTION_AFTER_PAYMENT_PROCESSED, "el historial de transacciones, despu�s de que se haya procesado el pago.");
	//after your payment is processed.
	define(LANG_MSG_AFTER_PAYMENT_IS_PROCESSED, "despu�s de que se haya procesado el pago.");
	//No items requiring payment.
	define(LANG_MSG_NO_ITEMS_REQUIRING_PAYMENT, "No hay elementos que requieran pagarse.");
	//Pay for outstanding invoices
	define(LANG_MSG_PAY_OUTSTANDING_INVOICES, "Pagar facturas pendientes");
	//Banner by Impression and Custom Invoices can be paid once.
	define(LANG_MSG_BANNER_CUSTOM_INVOICE_PAID_ONCE, ucwords(BANNER_FEATURE_NAME)." por impresi�n y facturas personalizadas se puede pagar una vez.");
	//Banner by Impression can be paid once.
	define(LANG_MSG_BANNER_PAID_ONCE, ucwords(BANNER_FEATURE_NAME)." por impresi�n se puede pagar una vez.");
	//Custom Invoices can be paid once.
	define(LANG_MSG_CUSTOM_INVOICE_PAID_ONCE, "Las facturas personalizadas se pueden pagar una vez.");
	//View Items
	define(LANG_VIEWITEMS, 'Ver Art�culos');
	//Please do not use recurring payment system.
	define(LANG_MSG_PLEASE_DO_NOT_USE_RECURRING_PAYMENT_SYSTEM, "No use un sistema de pago reiterativo.");
	//Try again!
	define(LANG_MSG_TRY_AGAIN, "Intente nuevamente.");
	//All fields are required.
	define(LANG_MSG_ALL_FIELDS_REQUIRED, "Se requieren todos los campos.");
	//"You have more than" X items. Please contact the administrator to check out it.
	define(LANG_MSG_OVERITEM_MORETHAN, "Usted tiene m�s de ");
	//You have more than X items. "Please contact the administrator to check out it".
	define(LANG_MSG_OVERITEM_CONTACTADMIN, "Por favor, p�ngase en contacto con el administrador para pagar");
	//Article Options
	define(LANG_ARTICLE_OPTIONS, "Opciones del art�culo");
	//Article Author
	define(LANG_ARTICLE_AUTHOR, "Autor del Art�culo");
	//Article Author URL
	define(LANG_ARTICLE_AUTHOR_URL, "URL del autor");
	//Article Categories
	define(LANG_ARTICLE_CATEGORIES, "Categor�as del Art�culo");
	//Banner Type
	define(LANG_BANNER_TYPE, "Tipo de Banner");
	//Banner Options
	define(LANG_BANNER_OPTIONS, "Opciones de Banner");
	//Order Banner
	define(LANG_ORDER_BANNER, "Solicitar Banner");
	//By time period
	define(LANG_BANNER_BY_TIME_PERIOD, "Por per�odo");
	//Banner Details
	define(LANG_BANNER_DETAIL_PLURAL, "Detalles del Banner");
	//Script Banner
	define(LANG_SCRIPT_BANNER, "Hacer secuencia de comandos del Banner");
	//Show by Script Code
	define(LANG_SHOWSCRIPTCODE, "Mostrar por c�digo de secuencia de comandos");
	//Allow script to be entered instead of an image. This field allows you to paste in script that will be used to display the banner from an affiliate program or external banner system. If "Show by Script Code" is checked, just "Script" field will be required. The other fields below will not be necessary.
	define(LANG_SCRIPTCODEHELP, "Permitir especificar una secuencia de comandos en lugar de una imagen. Este campo permite pegar una secuencia de comandos que se usar� para mostrar el banner de un programa asociado o un sistema de banner externo. Si \"Mostrar por c�digo de secuencia de comandos\" est� activado, solo se requerir� el campo \"Secuencia de comandos\". No se necesitar�n los dem�s campos situados a continuaci�n.");
	//Both "Destination Url" and "Traffic Report ClickThru" has no effect when you upload swf file
	define(LANG_BANNERFILEHELP, "\"URL de destino\" y \"Clic directo de informes de tr�fico\" no tendr�n efecto al cargar el archivo swf");
	//Classified Level
	define(LANG_CLASSIFIED_LEVEL, "Nivel del Clasificado");
	//Classified Category
	define(LANG_CLASSIFIED_CATEGORY, "Categor�a del Clasificado");
	//Select classified level
	define(LANG_MENU_SELECT_CLASSIFIED_LEVEL, "Seleccionar el nivel del clasificado");
	//Classified Options
	define(LANG_CLASSIFIED_OPTIONS, "Opciones del Clasificado");
	//Event Level
	define(LANG_EVENT_LEVEL, "Nivel del Evento");
	//Event Categories
	define(LANG_EVENT_CATEGORY_PLURAL, "Categor�as del Evento");
	//Select event level
	define(LANG_MENU_SELECT_EVENT_LEVEL, "Seleccionar nivel de evento");
	//Event Options
	define(LANG_EVENT_OPTIONS, "Opciones de Evento");
	//Listing Level
	define(LANG_LISTING_LEVEL, "Nivel de Lista");
	//Listing Template
	define(LANG_LISTING_TEMPLATE, "Plantilla de Lista");
	//Listing Categories
	define(LANG_LISTING_CATEGORIES, "Categor�as de la Lista");
	//Listing Designations
	define(LANG_LISTING_DESIGNATION_PLURAL, "Designaciones de la Lista");
	//Subject to administrator approval.
	define(LANG_LISTING_SUBJECTTOAPPROVAL, "Sujeto a la aprobaci�n del administrador.");
	//Select this choice
	define(LANG_LISTING_SELECT_THIS_CHOICE, "Seleccionar esta opci�n");
	//Select listing level
	define(LANG_MENU_SELECTLISTINGLEVEL, "Seleccionar el nivel de la lista");
	//Listing Options
	define(LANG_LISTING_OPTIONS, "Opciones de Lista");
	//The Authorize Payment System is not available currently. Please contact the
	define(LANG_AUTHORIZE_NO_AVAILABLE, "El sistema de pago Authorize no est� actualmente disponible. P�ngase en contacto con el");
	//The iTransact Payment System is not available currently. Please contact the
	define(LANG_ITRANSACT_NO_AVAILABLE, "El sistema de pago iTransact no est� actualmente disponible. P�ngase en contacto con el");
	//The LinkPoint Payment System is not available currently. Please contact the
	define(LANG_LINKPOINT_NO_AVAILABLE, "El sistema de pago LinkPoint no est� actualmente disponible. P�ngase en contacto con el");
	//The PayFlow Payment System is not available currently. Please contact the
	define(LANG_PAYFLOW_NO_AVAILABLE, "El sistema de pago PayFlow no est� actualmente disponible. P�ngase en contacto con el");
	//The PayPal Payment System is not available currently. Please contact the
	define(LANG_PAYPAL_NO_AVAILABLE, "El sistema de pago PayPal no est� actualmente disponible. P�ngase en contacto con el");
	//The PayPalAPI Payment System is not available currently. Please contact the
	define(LANG_PAYPALAPI_NO_AVAILABLE, "El sistema de pago PayPalAPI no est� actualmente disponible. P�ngase en contacto con el");
	//The PSIGate Payment System is not available currently. Please contact the
	define(LANG_PSIGATE_NO_AVAILABLE, "El sistema de pago PSIGate no est� actualmente disponible. P�ngase en contacto con el");
	//The 2CheckOut Payment System is not available currently. Please contact the
	define(LANG_TWOCHECKOUT_NO_AVAILABLE, "El sistema de pago 2CheckOut no est� actualmente disponible. P�ngase en contacto con el");
	//The WorldPay Payment System is not available currently. Please contact the
	define(LANG_WORLDPAY_NO_AVAILABLE, "El sistema de pago WorldPay no est� actualmente disponible. P�ngase en contacto con el");
	//Upload Warning
	define(LANG_UPLOAD_WARNING, "Advertencia de carga");
	//File successfully uploaded!
	define(LANG_UPLOAD_MSG_SUCCESSUPLOADED, "Se carg� correctamente el archivo");
	//Extension not allowed or wrong file type!
	define(LANG_UPLOAD_MSG_NOTALLOWED_WRONGFILETYPE, "La extensi�n no est� permitida, o el tipo de archivo es err�neo");
	//File exceeds size limit!
	define(LANG_UPLOAD_MSG_EXCEEDSLIMIT, "El archivo excede el l�mite de tama�o");
	//Fail trying to create directory!
	define(LANG_UPLOAD_MSG_FAILCREATEDIRECTORY, "Error al intentar crear el directorio");
	//Wrong directory permission!
	define(LANG_UPLOAD_MSG_WRONGDIRECTORYPERMISSION, "Permiso de directorio err�neo");
	//Unexpected failure!
	define(LANG_UPLOAD_MSG_UNEXPECTEDFAILURE, "Error inesperado");
	//File not found or not entered!
	define(LANG_UPLOAD_MSG_NOTFOUND_NOTENTERED, "No se encontr� o no se especific� el archivo");
	//File already exists in directory!
	define(LANG_UPLOAD_MSG_FILEALREADEXISTSINDIRECTORY, "El archivo ya existe en el directorio");
	//View all locations
	define(LANG_VIEWALLLOCATIONSCATEGORIES, "Ver todas las Ubicaci�nes");
	//Popular Locations 
	define(LANG_POPULARLOCATIONS, "Lugares Populares"); 
	//There aren't any popular location in the system. 
	define(LANG_LABEL_NOPOPULARLOCATIONS, "No hay lugar popular en el sistema.");
	//Overview
	define(LANG_LABEL_OVERVIEW, "Resumen");
	//Video
	define(LANG_LABEL_VIDEO, "Video");
	//Map Location
	define(LANG_LABEL_MAPLOCATION, "Ubicaci�n en el Mapa");
	//More Listings
	define(LANG_LABEL_MORELISTINGS, "M�s Listas");
	//More Events
	define(LANG_LABEL_MOREEVENTS, "M�s Eventos");
	//More Classifieds
	define(LANG_LABEL_MORECLASSIFIEDS, "M�s Clasificados");
	//More Articles
	define(LANG_LABEL_MOREARTICLES, "M�s Art�culos");
	//"Operation not allowed: The promotion" (promotion_name) is already associated with the listing
	define("LANG_MSGERROR_PROMOTIONOPERATIONNOTALLOWED1", 'No se permite la operaci�n: la promoci�n');
	//Operation not allowed: The promotion (promotion_name) "is already associated with the listing"
	define("LANG_MSGERROR_PROMOTIONOPERATIONNOTALLOWED2", 'ya est� asociada con la lista');

	# ----------------------------------------------------------------------------------------------------
	# FUNCTIONS
	# ----------------------------------------------------------------------------------------------------
	//Photo Gallery
	define(LANG_GALLERYTITLE, "Galer�a de fotos");
	//"Click here" for Slideshow. You can also click on any of the photos to start slideshow.
	define(LANG_GALLERYCLICKHERE, "Haga clic aqu�");
	//Click here "for Slideshow. You can also click on any of the photos to start slideshow."
	define(LANG_GALLERYSLIDESHOWTEXT, "para ver la presentaci�n de diapositivas. Tambi�n puede hacer clic en cualquier foto para iniciar la presentaci�n.");
	//more photos
	define(LANG_GALLERYMOREPHOTOS, "m�s fotos");
	//Inexistent Discount Code
	define(LANG_MSG_INEXISTENT_DISCOUNT_CODE, "C�digo de promoci�n inexistente");
	//is not available.
	define(LANG_MSG_IS_NOT_AVAILABLE, "no est� disponible.");
	//is not available for this item type.
	define(LANG_MSG_IS_NOT_AVAILABLE_FOR, "no est� disponible para este tipo de elemento.");
	//cannot be used twice.
	define(LANG_MSG_CANNOT_BE_USED_TWICE, "no se puede usar dos veces.");
	//"You can select up to" [ITEM_MAX_GALLERY] gallery(ies).
	define(LANG_MSG_YOU_CAN_SELECT_ITEM_GALLERY_UP, "Puede seleccionar hasta");
	//You can select up to [ITEM_MAX_GALLERY] "gallery(ies)".
	define(LANG_MSG_YOU_CAN_SELECT_ITEM_GALLERY, "galer�a.");
	//You can select up to [ITEM_MAX_GALLERY] "gallery(ies)".
	define(LANG_MSG_YOU_CAN_SELECT_ITEM_GALLERIES, "galer�as.");
	//Title is required.
	define(LANG_MSG_TITLE_IS_REQUIRED, "Se requiere el t�tulo.");
	//Language is required.
	define(LANG_MSG_LANGUAGE_IS_REQUIRED, "Se requiere el idioma.");
	//First Name is required.
	define(LANG_MSG_FIRST_NAME_IS_REQUIRED, "Se requiere el nombre.");
	//Last Name is required.
	define(LANG_MSG_LAST_NAME_IS_REQUIRED, "Se requiere el apellido.");
	//Company is required.
	define(LANG_MSG_COMPANY_IS_REQUIRED, "Se requiere la empresa.");
	//Phone is required.
	define(LANG_MSG_PHONE_IS_REQUIRED, "Se requiere el tel�fono.");
	//E-mail is required.
	define(LANG_MSG_EMAIL_IS_REQUIRED, "Se requiere la direcci�n de correo electr�nico.");
	//Account is required.
	define(LANG_MSG_ACCOUNT_IS_REQUIRED, "Se requiere la cuenta.");
	//Page Name is required.
	define(LANG_MSG_PAGE_NAME_IS_REQUIRED, "Se requiere el nombre de la p�gina.");
	//Category is required.
	define(LANG_MSG_CATEGORY_IS_REQUIRED, "Se requiere la categor�a.");
	//Abstract is required.
	define(LANG_MSG_ABSTRACT_IS_REQUIRED, "Se requiere el resumen.");
	//Expiration type is required.
	define(LANG_MSG_EXPIRATION_TYPE_IS_REQUIRED, "Se requiere el tipo de vencimiento.");
	//Renewal Date is required.
	define(LANG_MSG_RENEWAL_DATE_IS_REQUIRED, "Se requiere la fecha de renovaci�n.");
	//Impressions are required.
	define(LANG_MSG_IMPRESSIONS_ARE_REQUIRED, "Se requieren las impresiones.");
	//File is required.
	define(LANG_MSG_FILE_IS_REQUIRED, "Se requiere el archivo.");
	//Type is required.
	define(LANG_MSG_TYPE_IS_REQUIRED, "Se requiere el tipo.");
	//Caption is required.
	define(LANG_MSG_CAPTION_IS_REQUIRED, "Se requiere el ep�grafe.");
	//Script Code is required.
	define(LANG_MSG_SCRIPT_CODE_IS_REQUIRED, "Se requiere el c�digo de secuencia de comandos.");
	//Description 1 is required.
	define(LANG_MSG_DESCRIPTION1_IS_REQUIRED, "Se requiere la descripci�n 1.");
	//Description 2 is required.
	define(LANG_MSG_DESCRIPTION2_IS_REQUIRED, "Se requiere la descripci�n 2.");
	//Name is required.
	define(LANG_MSG_NAME_IS_REQUIRED, "Se requiere el nombre.");
	//"Headline" is required.
	define(LANG_MSG_HEADLINE_IS_REQUIRED, "Se requiere el \"Titular\".");
	//"Offer" is required.
	define(LANG_MSG_OFFER_IS_REQUIRED, "Se requiere la \"Oferta\".");
	//"Start Date" is required.
	define(LANG_MSG_START_DATE_IS_REQUIRED, "Se requiere la \"Fecha de inicio\".");
	//"End Date" is required.
	define(LANG_MSG_END_DATE_IS_REQUIRED, "Se requiere la \"Fecha de finalizaci�n\".");
	//Text is required.
	define(LANG_MSG_TEXT_IS_REQUIRED, "Se requiere el texto.");
	//"Username" is required.
	define(LANG_MSG_USERNAME_IS_REQUIRED, "Se requiere el \"Nombre de usuario\".");
	//"Current Password" is incorrect.
	define(LANG_MSG_CURRENT_PASSWORD_IS_INCORRECT, "La \"Contrase�a actual\" no es correcta.");
	//"Password" is required.
	define(LANG_MSG_PASSWORD_IS_REQUIRED, "Se requiere la \"Contrase�a\".");
	//"Agree to terms of use" is required.
	define(LANG_MSG_IGREETERMS_IS_REQUIRED, "Se requiere la \"Aceptaci�n de los t�rminos de uso\".");
	//The following fields were not filled or contain errors:
	define(LANG_MSG_FIELDS_CONTAIN_ERRORS, "No se completaron los siguientes campos, o contienen errores:");
	//Title - Please fill out the field
	define(LANG_MSG_TITLE_PLEASE_FILL_OUT, "T�tulo: complete el campo");
	//Page Name - Please fill out the field
	define(LANG_MSG_PAGE_NAME_PLEASE_FILL_OUT, "Nombre de la p�gina: complete el campo");
	//"Maximum of" [MAX_CATEGORY_ALLOWED] categories are allowed
	define(LANG_MSG_MAX_OF_CATEGORIES_1, "M�ximo de");
	//Maximum of [MAX_CATEGORY_ALLOWED] "categories are allowed"
	define(LANG_MSG_MAX_OF_CATEGORIES_2, "categor�as permitidas");
	//Friendly URL Page Name already in use, please choose another Page Name.
	define(LANG_MSG_FRIENDLY_URL_IN_USE, "El nombre de la p�gina de URL sem�ntica ya est� en uso, seleccione otro nombre para la p�gina.");
	//Page Name contain invalid chars
	define(LANG_MSG_PAGE_NAME_INVALID_CHARS, "El nombre de la p�gina contiene caracteres no v�lidos");
	//"Maximum of" [MAX_KEYWORDS] keywords are allowed
	define(LANG_MSG_MAX_OF_KEYWORDS_ALLOWED_1, "M�ximo de");
	//Maximum of [MAX_KEYWORDS] "keywords are allowed"
	define(LANG_MSG_MAX_OF_KEYWORDS_ALLOWED_2, "palabras clave permitidas");
	//Please include keywords with a maximum of 50 characters each
	define(LANG_MSG_PLEASE_INCLUDE_KEYWORDS, "Incluya palabras clave, de no m�s de 50 caracteres cada una.");
	//Please enter a valid "Publication Date".
	define(LANG_MSG_ENTER_VALID_PUBLICATION_DATE, "Especifique una \"Fecha de publicaci�n\" v�lida.");
	//Please enter a valid "Start Date".
	define(LANG_MSG_ENTER_VALID_START_DATE, "Especifique una \"Fecha de inicio\" v�lida.");
	//Please enter a valid "End Date".
	define(LANG_MSG_ENTER_VALID_END_DATE, "Especifique una \"Fecha de finalizaci�n\" v�lida.");
	//The "End Date" must be greater than or equal to the "Start Date".
	define(LANG_MSG_END_DATE_GREATER_THAN_START_DATE, "La \"Fecha de finalizaci�n\" debe ser posterior o igual a la \"Fecha de inicio\".");
	//The "End Date" cannot be in past.
	define(LANG_MSG_END_DATE_CANNOT_IN_PAST, "La \"Fecha de finalizaci�n\" no puede estar en el pasado.");
	//Please enter a valid e-mail address.
	define(LANG_MSG_ENTER_VALID_EMAIL_ADDRESS, "Especifique una direcci�n de correo electr�nico v�lida.");
	//Please enter a valid "URL".
	define(LANG_MSG_ENTER_VALID_URL, "Especifique una \"URL\" v�lida.");
	//Please provide a description with a maximum of 255 characters.
	define(LANG_MSG_PROVIDE_DESCRIPTION_WITH_255_CHARS, "Escriba una descripci�n de no m�s de 255 caracteres.");
	//Please provide a conditions with a maximum of 255 characters.
	define(LANG_MSG_PROVIDE_CONDITIONS_WITH_255_CHARS, "Escriba una condici�n de no m�s de 255 caracteres.");
	//Please enter a valid renewal date.
	define(LANG_MSG_ENTER_VALID_RENEWAL_DATE, "Especifique una fecha de renovaci�n v�lida.");
	//Renewal date must be in the future.
	define(LANG_MSG_RENEWAL_DATE_IN_FUTURE, "La fecha de renovaci�n debe estar en el futuro");
	//Please enter a valid expiration date.
	define(LANG_MSG_ENTER_VALID_EXPIRATION_DATE, "Especifique una fecha de vencimiento v�lida.");
	//Expiration date must be in the future.
	define(LANG_MSG_EXPIRATION_DATE_IN_FUTURE, "La fecha de vencimiento debe estar en el futuro");
	//Blank space is not allowed for password.
	define(LANG_MSG_BLANK_SPACE_NOT_ALLOWED_FOR_PASSWORD, "No se permite dejar en blanco la contrase�a.");
	//"Please enter a password with a maximum of" [PASSWORD_MAX_LEN] [LANG_LABEL_CHARACTERES]
	define(LANG_MSG_ENTER_PASSWORD_WITH_MAX_CHARS, "Escriba una contrase�a de no m�s de");
	//"Please enter a password with a minimum of" [PASSWORD_MIN_LEN] [LANG_LABEL_CHARACTERES]
	define(LANG_MSG_ENTER_PASSWORD_WITH_MIN_CHARS, "Escriba una contrase�a de no menos de");
	//Password "abc123" not allowed!
	define(LANG_MSG_ABC123_NOT_ALLOWED, "No se permite contrase�a \"abc123\".");
	//Passwords do not match. Please enter the same content for "password" and "retype password" fields.
	define(LANG_MSG_PASSWORDS_DO_NOT_MATCH, "Las contrase�as no coinciden. Escriba el mismo texto en los campos \"Contrase�a\" y \"Vuelva a escribir la contrase�a\".");
	//Spaces are not allowed for username.
	define(LANG_MSG_SPACES_NOT_ALLOWED_FOR_USERNAME, "No se permiten espacios para el nombre de usuario.");
	//Special characters are not allowed for username.
	define(LANG_MSG_SPECIAL_CHARS_NOT_ALLOWED_FOR_USERNAME, "No se permiten caracteres especiales para el nombre de usuario.");
	//"Please choose an username with a maximum of" [USERNAME_MAX_LEN] [LANG_LABEL_CHARACTERES]
	define(LANG_MSG_CHOOSE_USERNAME_WITH_MAX_CHARS, "Seleccione un nombre de usuario de no m�s de");
	//"Please choose an username with a minimum of" [USERNAME_MIN_LEN] [LANG_LABEL_CHARACTERES]
	define(LANG_MSG_CHOOSE_USERNAME_WITH_MIN_CHARS, "Seleccione un nombre de usuario de no menos de");
	//Please choose a different username.
	define(LANG_MSG_CHOOSE_DIFFERENT_USERNAME, "Seleccione un nombre de usuario diferente.");

	# ----------------------------------------------------------------------------------------------------
	# MENU
	# ----------------------------------------------------------------------------------------------------
	//Home
	define(LANG_MENU_HOME, "Inicio");
	//Member Options
	define(LANG_MENU_MEMBEROPTIONS, "Opciones de miembro");
	//Listings
	define(LANG_MENU_LISTING, "Listas");
	//Add Listing
	define(LANG_MENU_ADDLISTING, "Agregar Lista");
	//Manage Listings
	define(LANG_MENU_MANAGELISTING, "Administrar Listas");
	//Galleries
	define(LANG_MENU_GALLERY, "Galer�as");
	//Add Gallery
	define(LANG_MENU_ADDGALLERY, "Agregar galer�a");
	//Manage Gallery
	define(LANG_MENU_MANAGEGALLERY, "Administrar galer�a");
	//Events
	define(LANG_MENU_EVENT, "Eventos");
	//Add Event
	define(LANG_MENU_ADDEVENT, "Agregar Evento");
	//Manage Events
	define(LANG_MENU_MANAGEEVENT, "Administrar Eventos");
	//Banners
	define(LANG_MENU_BANNER, "Banners");
	//Add Banner
	define(LANG_MENU_ADDBANNER, "Agregar Banner");
	//Manage Banners
	define(LANG_MENU_MANAGEBANNER, "Administrar Banners");
	//Classifieds
	define(LANG_MENU_CLASSIFIED, "Clasificados");
	//Add Classified
	define(LANG_MENU_ADDCLASSIFIED, "Agregar Clasificado");
	//Manage Classifieds
	define(LANG_MENU_MANAGECLASSIFIED, "Administrar Clasificados");
	//Articles
	define(LANG_MENU_ARTICLE, "Art�culos");
	//Add Article
	define(LANG_MENU_ADDARTICLE, "Agregar Art�culo");
	//Manage Articles
	define(LANG_MENU_MANAGEARTICLE, "Administrar Art�culos");
	//Promotions
	define(LANG_MENU_PROMOTION, "Promociones");
	//Add Promotion
	define(LANG_MENU_ADDPROMOTION, "Agregar Promoci�n");
	//Manage Promotions
	define(LANG_MENU_MANAGEPROMOTION, "Administrar Promociones");
	//Advertise With Us
	define(LANG_MENU_ADVERTISE, "Publicite");
	//FAQ
	define(LANG_MENU_FAQ, "Preguntas");
	//Sitemap
	define(LANG_MENU_SITEMAP, "Mapa del sitio");
	//Contact Us
	define(LANG_MENU_CONTACT, "Contactar");
	//Payment Options
	define(LANG_MENU_PAYMENTOPTIONS, "Opciones de pago");
	//Check Out
	define(LANG_MENU_CHECKOUT, "Pagar");
	//Make Your Payment
	define(LANG_MENU_MAKEPAYMENT, "Realice su pago");
	//History
	define(LANG_MENU_HISTORY, "Historial");
	//Transaction History
	define(LANG_MENU_TRANSACTIONHISTORY, "Historial de transacciones");
	//Invoice History
	define(LANG_MENU_INVOICEHISTORY, "Historial de facturas");
	//Choose a Theme
	define(LANG_MENU_CHOOSETHEME, "Elija un tema");

	# ----------------------------------------------------------------------------------------------------
	# SEARCH
	# ----------------------------------------------------------------------------------------------------
	//Search Article
	define(LANG_LABEL_SEARCHARTICLE, "Buscar Art�culo");
	//Search Classified
	define(LANG_LABEL_SEARCHCLASSIFIED, "Buscar Clasificado");
	//Search Event
	define(LANG_LABEL_SEARCHEVENT, "Buscar Evento");
	//Search Listing
	define(LANG_LABEL_SEARCHLISTING, "Buscar Lista");
	//Search Promotion
	define(LANG_LABEL_SEARCHPROMOTION, "Buscar Promoci�n");
	//Advanced Search
	define(LANG_SEARCH_ADVANCEDSEARCH, "B�squeda avanzada");
	//Search
	define(LANG_SEARCH_LABELKEYWORD, "Buscar");
	//Location
	define(LANG_SEARCH_LABELLOCATION, "Ubicaci�n");
	//Select a Country
	define(LANG_SEARCH_LABELCBCOUNTRY, "Seleccione un pa�s");
	//Select a State
	define(LANG_SEARCH_LABELCBSTATE, "Seleccione un estado");
	//Select a City
	define(LANG_SEARCH_LABELCBCITY, "Seleccione una ciudad");
	//Category
	define(LANG_SEARCH_LABELCATEGORY, "Categor�a");
	//Select a Category
	define(LANG_SEARCH_LABELCBCATEGORY, "Seleccione una categor�a");
	//Match
	define(LANG_SEARCH_LABELMATCH, "Filtro");
	//exact match
	define(LANG_SEARCH_LABELMATCH_EXACTMATCH, "frase exacta");
	//any word
	define(LANG_SEARCH_LABELMATCH_ANYWORD, "cualquier palabra");
	//all words
	define(LANG_SEARCH_LABELMATCH_ALLWORDS, "todas las palabras");
	//Listing Type
	define(LANG_SEARCH_LABELBROWSE, "Tipo de Lista");
	//from
	define(LANG_SEARCH_LABELFROM, "de");
	//to
	define(LANG_SEARCH_LABELTO, "a");
	//Miles "of"
	define(LANG_SEARCH_LABELZIPCODE_OF, "de");
	//Search by keyword
	define(LANG_LABEL_SEARCHFAQ, "Buscar por palabra clave");
	//Search
	define(LANG_LABEL_SEARCHFAQ_BUTTON, "Buscar");

	# ----------------------------------------------------------------------------------------------------
	# FRONTEND
	# ----------------------------------------------------------------------------------------------------
	//Featured
	define(LANG_ITEM_FEATURED, "Presentados");
	//Recent Articles
	define(LANG_RECENT_ARTICLE, "Art�culos Recientes");
	//Upcoming Events
	define(LANG_UPCOMING_EVENT, "Eventos Pr�ximos");
	//Featured Classifieds
	define(LANG_FEATURED_CLASSIFIED, "Clasificados Presentados");
	//Featured Articles
	define(LANG_FEATURED_ARTICLE, "Art�culos Presentados");
	//Featured Listings
	define(LANG_FEATURED_LISTING, "Listas Presentadas");
	//Featured Promotions
	define(LANG_FEATURED_PROMOTION, "Promociones Presentadas");
	//Easy and Fast.
	define(LANG_EASYANDFAST, "F�cil y R�pido.");
	//3 Steps
	define(LANG_THREESTEPS, "Tres pasos");
	//Account Signup
	define(LANG_ACCOUNTSIGNUP, "Registrar cuenta");
	//Listing Update
	define(LANG_LISTINGUPDATE, "Actualizaci�n");
	//Order
	define(LANG_ORDER, "Solicitar");
	//Check Out
	define(LANG_CHECKOUT, "Pagar");
	//Configuration
	define(LANG_CONFIGURATION, "Configuraci�n");
	//Select a package
	define(LANG_SELECTPACKAGE, "Seleccionar un paquete");
	//Do you already have an account?
	define(LANG_ALREADYHAVEACCOUNT, "�Ya tiene una cuenta?");
	//No, I'm a New User.
	define(LANG_ACCOUNTNEWUSER, "No, soy un Usuario Nuevo.");
	//Yes, I have an Existing Account.
	define(LANG_ACCOUNTEXISTSUSER, "S�, tengo una Cuenta.");
	//Yes, I have a Directory Account.
	define(LANG_ACCOUNTDIRECTORYUSER, "S�, tengo una cuenta en el Directorio.");
	//Yes, I have an OpenID 2.0 Account.
	define(LANG_ACCOUNTOPENIDUSER, "S�, tengo una cuenta OpenID 2.0.");
	//Yes, I have a Facebook Account.
	define(LANG_ACCOUNTFACEBOOKUSER, "S�, tengo una cuenta Facebook.");
	//Account Information
	define(LANG_ACCOUNTINFO, "Informaci�n de la cuenta");
	//Additional Information
	define(LANG_LABEL_ADDITIONALINFORMATION, "Informaci�n Extra");
	//Please write down your username and password for future reference.
	define(LANG_ACCOUNTINFOMSG, "Tome nota de su nombre de usuario y contrase�a para referencia.");
	//"Username must be between" [USERNAME_MIN_LEN] and [USERNAME_MAX_LEN] characters with no spaces.
	define(LANG_USERNAME_MSG1, "El nombre de usuario debe tener entre");
	//Username must be between [USERNAME_MIN_LEN] "and" [USERNAME_MAX_LEN] characters with no spaces.
	define(LANG_USERNAME_MSG2, "y");
	//Username must be between [USERNAME_MIN_LEN] and [USERNAME_MAX_LEN] "characters with no spaces."
	define(LANG_USERNAME_MSG3, "caracteres, sin espacios.");
	//"Password must be between" [PASSWORD_MIN_LEN] and [PASSWORD_MAX_LEN] characters with no spaces.
	define(LANG_PASSWORD_MSG1, "La contrase�a debe tener entre");
	//Password must be between [PASSWORD_MIN_LEN] "and" [PASSWORD_MAX_LEN] characters with no spaces.
	define(LANG_PASSWORD_MSG2, "y");
	//Password must be between [PASSWORD_MIN_LEN] and [PASSWORD_MAX_LEN] "characters with no spaces."
	define(LANG_PASSWORD_MSG3, "caracteres, sin espacios.");
	//I agree with the terms of use
	define(LANG_IGREETERMS, "Acepto los t�rminos de uso");
	//Do you want to advertise with us?
	define(LANG_DOYOUWANT_ADVERTISEWITHUS, "�Quieres publiciter con nosotros?");
	//Buy a link
	define(LANG_BUY_LINK, "Comprar un v�nculo");
	//Back to Top
	define(LANG_BACKTOTOP, 'Volver Arriba');
	//View Quick List
	define(LANG_QUICK_LIST, "Ver Lista R�pida");
	//view summary
	define(LANG_VIEWSUMMARY, 'ver resumen');
	//view detail
	define(LANG_VIEWDETAIL, 'ver detalles');
	//Advertisers
	define(LANG_ADVERTISER, "Auspiciantes");
	//Order Now!
	define(LANG_ORDERNOW, "Pida Ahora.");
	//Wait, Loading...
	define(LANG_WAITLOADING, "Espere, cargando...");
	//Total Price Amount
	define(LANG_TOTALPRICEAMOUNT, "Valor total del precio");
	//Quick List
	define(LANG_LABEL_QUICKLIST, "Lista R�pida");
	//You have not selected any quick list items yet.
	define(LANG_LABEL_NOQUICKLIST, "A�n no seleccion� ning�n elemento de la lista r�pida.");
	//Search results for
	define(LANG_LABEL_SEARCHRESULTSFOR, "Buscar resultados por");
	//Related Search
	define(LANG_LABEL_RELATEDSEARCH, "B�squeda Relacionada");
	//Browse by Section
	define(LANG_LABEL_BROWSESECTION, "B�squeda por secci�n");
	//Keyword
	define(LANG_LABEL_SEARCHKEYWORD, "Palabra Clave");
	//(type a keyword)
	define(LANG_LABEL_SEARCHKEYWORDTIP, "(escriba una palabra clave)");
	//(type a keyword or listing name)
	define(LANG_LABEL_SEARCHKEYWORDTIP_LISTING, "(palabra clave o nombre de la lista)");
	//(type a keyword or promotion title)
	define(LANG_LABEL_SEARCHKEYWORDTIP_PROMOTION, "(palabra clave o t�tulo de la promoci�n)");
	//(type a keyword or event title)
	define(LANG_LABEL_SEARCHKEYWORDTIP_EVENT, "(palabra clave o t�tulo del evento)");
	//(type a keyword or classified title)
	define(LANG_LABEL_SEARCHKEYWORDTIP_CLASSIFIED, "(palabra clave o t�tulo del clasificado)");
	//(type a keyword or article title)
	define(LANG_LABEL_SEARCHKEYWORDTIP_ARTICLE, "(palabra clave o t�tulo del art�culo)");
	//Where
	define(LANG_LABEL_SEARCHWHERE, "Donde");
	//(Address, City, State or Zip Code)
	define(LANG_LABEL_SEARCHWHERETIP, "(Direcci�n, Ciudad, Estado o C�digo Postal)");
	//Complete the form below to contact us.
	define(LANG_LABEL_FORMCONTACTUS, "Complete el siguiente formulario para ponerse en contacto con nosotros.");
	//Message
	define(LANG_LABEL_MESSAGE, "Mensaje");
	//No categories found
	define(LANG_CATEGORY_NOTFOUND, "No se encontraron categor�as");
	//Please, select a valid category
	define(LANG_CATEGORY_INVALIDERROR, "Seleccione una categor�a v�lida");
	//Please select a category first!
	define(LANG_CATEGORY_SELECTFIRSTERROR, "Seleccione una categor�a en primer lugar.");
	//View Category Path
	define(LANG_CATEGORY_VIEWPATH, "Ver ruta de las categor�as");
	//Remove Selected Category
	define(LANG_CATEGORY_REMOVESELECTED, "Quitar categor�a");
	//"Extra categories/sub-categories cost an" additional [LEVEL_CATEGORY_PRICE] each. Be seen!
	define(LANG_CATEGORIES_PRICEDESC1, "Las categor�as o subcategor�as extra cuestan un");
	//Extra categories/sub-categories cost an "additional" [LEVEL_CATEGORY_PRICE] each. Be seen!
	define(LANG_CATEGORIES_PRICEDESC2, "adicional");
	//Extra categories/sub-categories cost an additional [LEVEL_CATEGORY_PRICE] "each. Be seen!"
	define(LANG_CATEGORIES_PRICEDESC3, "cada una. Es visto.");
	//Categories and sub-categories
	define(LANG_CATEGORIES_TITLE, "Categor�as y subcategor�as");
	//Only select sub-categories that directly apply to your type.
	define(LANG_CATEGORIES_MSG1, "Seleccione �nicamente subcategor�as que se apliquen directamente a su tipo.");
	//Your listing will automatically appear in the main category of each sub-category you select.
	define(LANG_CATEGORIES_MSG2, "Su lista aparecer� autom�ticamente en la categor�a principal de cada subcategor�a que seleccione.");
	//Account Information Error
	define(LANG_ACCOUNTINFO_ERROR, "Error de informaci�n de la cuenta");
	//Contact Information
	define(LANG_CONTACTINFO, "Informaci�n de Contacto");
	//This information will not be displayed publicly.
	define(LANG_CONTACTINFO_MSG, "Esta informaci�n no se mostrar� al p�blico.");
	//Billing Information
	define(LANG_BILLINGINFO, "Informaci�n de cuentas");
	//This information will not be displayed publicly.
	define(LANG_BILLINGINFO_MSG1, "Esta informaci�n no se mostrar� al p�blico.");
	//You will configure your article after placing the order.
	define(LANG_BILLINGINFO_MSG2_ARTICLE, "Deber� configurar su art�culo despu�s de realizar el pedido.");
	//You will configure your banner after placing the order.
	define(LANG_BILLINGINFO_MSG2_BANNER, "Deber� configurar su banner despu�s de realizar el pedido.");
	//You will configure your classified after placing the order.
	define(LANG_BILLINGINFO_MSG2_CLASSIFIED, "Deber� configurar su clasificado despu�s de realizar el pedido.");
	//You will configure your event after placing the order.
	define(LANG_BILLINGINFO_MSG2_EVENT, "Deber� configurar su evento despu�s de realizar el pedido.");
	//You will configure your listing after placing the order.
	define(LANG_BILLINGINFO_MSG2_LISTING, "Deber� configurar su lista despu�s de realizar el pedido.");
	//Billing Information Error
	define(LANG_BILLINGINFO_ERROR, "Error de informaci�n de cuentas");
	//Article Information
	define(LANG_ARTICLEINFO, "Informaci�n del Art�culo");
	//Article Information Error
	define(LANG_ARTICLEINFO_ERROR, "Error de informaci�n del Art�culo");
	//Banner Information
	define(LANG_BANNERINFO, "Informaci�n del Banner");
	//Banner Information Error
	define(LANG_BANNERINFO_ERROR, "Error de informaci�n del Banner");
	//Classified Information
	define(LANG_CLASSIFIEDINFO, "Informaci�n del Clasificado");
	//Classified Information Error
	define(LANG_CLASSIFIEDINFO_ERROR, "Error de informaci�n del Clasificado");
	//Browse Events by Date
	define(LANG_BROWSEEVENTSBYDATE, "Buscar Eventos por Fecha");
	//Event Information
	define(LANG_EVENTINFO, "Informaci�n del Evento");
	//Event Information Error
	define(LANG_EVENTINFO_ERROR, "Error de informaci�n del Evento");
	//Listing Information
	define(LANG_LISTINGINFO, "Informaci�n de la Lista");
	//Listing Information Error
	define(LANG_LISTINGINFO_ERROR, "Error de informaci�n de la Lista");
	//Claim this Listing
	define(LANG_LISTING_CLAIMTHIS, "Reclame esta Lista");
	//Listing Template
	define(LANG_LISTING_LABELTEMPLATE, "Plantilla de Lista");
	//No results were found for the search criteria you requested.
	define(LANG_MSG_NORESULTS, "No se encontraron resultados para los criterios de b�squeda requeridos.");
	//Please try your search again or browse by section.
	define(LANG_MSG_TRYAGAIN_BROWSESECTION, "Intente la b�squeda nuevamente o busque por secci�n.");
	//Sometimes you may receive no results for your search because the keyword you have used is highly generic. Try to use a more specific keyword and perform your search again.
	define(LANG_MSG_USE_SPECIFIC_KEYWORD, "Es posible que, a veces, la b�squeda no arroje resultados, ya que la palabra clave usada es demasiado gen�rica. Realice una nueva b�squeda con una palabra clave m�s espec�fica.");
	//Please type at least one keyword on the search box.
	define(LANG_MSG_LEASTONEKEYWORD, "Escriba al menos una palabra clave en el cuadro de b�squeda.");
	//Image
	define(LANG_SLIDESHOW_IMAGE, "Imagen");
	//of
	define(LANG_SLIDESHOW_IMAGEOF, "de");
	//Error loading image
	define(LANG_SLIDESHOW_IMAGELOADINGERROR, "Error al cargar imagen");
	//Next
	define(LANG_SLIDESHOW_NEXT, "Siguiente");
	//Pause
	define(LANG_SLIDESHOW_PAUSE, "Pausa");
	//Play
	define(LANG_SLIDESHOW_PLAY, "Reproducir");
	//Back
	define(LANG_SLIDESHOW_BACK, "Volver");
	//Your e-mail has been sent. Thank you.
	define(LANG_CONTACTMSGSUCCESS, "Se envi� su mensaje de correo electr�nico. Gracias.");
	//There was a problem sending this e-mail. Please try again.
	define(LANG_CONTACTMSGFAILED, "Hubo un problema al enviar este mensaje de correo electr�nico. Intente nuevamente.");
	//Please enter a valid e-mail address!
	define(LANG_MSG_CONTACT_ENTER_VALID_EMAIL, "Escriba una direcci�n de correo electr�nico v�lida.");
	//Please type the message!
	define(LANG_MSG_CONTACT_TYPE_MESSAGE, "Escriba un mensaje.");
	//Please type the code correctly!
	define(LANG_MSG_CONTACT_TYPE_CODE, "Escriba correctamente el c�digo.");
	//Please correct it and try again.
	define(LANG_MSG_CONTACT_CORRECTIT_TRYAGAIN, "Corr�jalo e intente nuevamente.");
	//Please type a name!
	define(LANG_MSG_CONTACT_TYPE_NAME, "Escriba un nombre.");
	//Please type a subject!
	define(LANG_MSG_CONTACT_TYPE_SUBJECT, "Escriba un asunto.");
	//SOME DETAILS
	define(LANG_ARTICLE_TOFRIEND_MAIL, "ALGUNOS DETALLES");
	//SOME DETAILS
	define(LANG_CLASSIFIED_TOFRIEND_MAIL, "ALGUNOS DETALLES");
	//SOME DETAILS
	define(LANG_EVENT_TOFRIEND_MAIL, "ALGUNOS DETALLES");
	//SOME DETAILS
	define(LANG_LISTING_TOFRIEND_MAIL, "ALGUNOS DETALLES");
	//SOME DETAILS
	define(LANG_PROMOTION_TOFRIEND_MAIL, "ALGUNOS DETALLES");
	//Please enter a valid e-mail address in the "To" field
	define(LANG_MSG_TOFRIEND1, "Escriba una direcci�n de correo electr�nico v�lida en el campo \"Para\"");
	//Please enter a valid e-mail address in the "From" field
	define(LANG_MSG_TOFRIEND2, "Escriba una direcci�n de correo electr�nico v�lida en el campo \"De\"");
	//"About" [ARTICLE_TITLE] from the [EDIRECTORY_TITLE]
	define(LANG_ARTICLE_CONTACTSUBJECT_ISNULL_1, "Acerca de");
	//About [ARTICLE_TITLE] "from the" [EDIRECTORY_TITLE]
	define(LANG_ARTICLE_CONTACTSUBJECT_ISNULL_2, "del");
	//"About" [CLASSIFIED_TITLE] from the [EDIRECTORY_TITLE]
	define(LANG_CLASSIFIED_CONTACTSUBJECT_ISNULL_1, "Acerca de");
	//About [CLASSIFIED_TITLE] "from the" [EDIRECTORY_TITLE]
	define(LANG_CLASSIFIED_CONTACTSUBJECT_ISNULL_2, "del");
	//"About" [EVENT_TITLE] from the [EDIRECTORY_TITLE]
	define(LANG_EVENT_CONTACTSUBJECT_ISNULL_1, "Acerca de");
	//About [EVENT_TITLE] "from the" [EDIRECTORY_TITLE]
	define(LANG_EVENT_CONTACTSUBJECT_ISNULL_2, "del");
	//"About" [LISTING_TITLE] from the [EDIRECTORY_TITLE]
	define(LANG_LISTING_CONTACTSUBJECT_ISNULL_1, "Acerca de");
	//About [LISTING_TITLE] "from the" [EDIRECTORY_TITLE]
	define(LANG_LISTING_CONTACTSUBJECT_ISNULL_2, "del");
	//"About" [PROMOTION_TITLE] from the [EDIRECTORY_TITLE]
	define(LANG_PROMOTION_CONTACTSUBJECT_ISNULL_1, "Acerca de");
	//About [PROMOTION_TITLE] "from the" [EDIRECTORY_TITLE]
	define(LANG_PROMOTION_CONTACTSUBJECT_ISNULL_2, "del");
	//Send info about this article to a friend
	define(LANG_ARTICLE_TOFRIEND_SAUDATION, "Enviar informaci�n acerca de este art�culo a un amigo");
	//Send info about this classified to a friend
	define(LANG_CLASSIFIED_TOFRIEND_SAUDATION, "Enviar informaci�n acerca de este clasificado a un amigo");
	//Send info about this event to a friend
	define(LANG_EVENT_TOFRIEND_SAUDATION, "Enviar informaci�n acerca de este evento a un amigo");
	//Send info about this listing to a friend
	define(LANG_LISTING_TOFRIEND_SAUDATION, "Enviar informaci�n acerca de la lista a un amigo");
	//Send info about this promotion to a friend
	define(LANG_PROMOTION_TOFRIEND_SAUDATION, "Enviar informaci�n acerca de esta promoci�n a un amigo");
	//Contact
	define(LANG_CONTACT, "Contacto");
	//article
	define(LANG_ARTICLE, "art�culo");
	//classified
	define(LANG_CLASSIFIED, "clasificado");
	//event
	define(LANG_EVENT, "evento");
	//listing
	define(LANG_LISTING, "lista");
	//promotion
	define(LANG_PROMOTION, "promoci�n");
	//Please search at least one parameter on the search box!
	define(LANG_MSG_LEASTONEPARAMETER, "Busque al menos un par�metro en el cuadro de b�squeda.");
	//Please try your search again.
	define(LANG_MSG_TRYAGAIN, "Intente nuevamente su b�squeda.");
	//No articles registered yet.
	define(LANG_MSG_NOARTICLES, "A�n no hay art�culos registrados.");
	//No classifieds registered yet.
	define(LANG_MSG_NOCLASSIFIEDS, "A�n no hay clasificados registrados.");
	//No events registered yet.
	define(LANG_MSG_NOEVENTS, "A�n no hay eventos registrados.");
	//No listings registered yet.
	define(LANG_MSG_NOLISTINGS, "A�n no hay listas registrados.");
	//No promotions registered yet.
	define(LANG_MSG_NOPROMOTIONS, "A�n no hay promociones registradas.");
	//Message sent through
	define(LANG_CONTACTPRESUBJECT, "Mensaje enviado por medio de");
	//E-mail Form
	define(LANG_EMAILFORM, "Formulario de correo electr�nico");
	//Click here to print
	define(LANG_PRINTCLICK, "Haga clic aqu� para imprimir");
	//View all categories
	define(LANG_CLASSIFIED_VIEWALLCATEGORIES, "Ver todas las categor�as");
	//Location
	define(LANG_CLASSIFIED_LOCATIONS, "Ubicaci�n");
	//More Classifieds
	define(LANG_CLASSIFIED_MORE, "M�s Clasificados");
	//View all categories
	define(LANG_EVENT_VIEWALLCATEGORIES, "Ver todas las categor�as");
	//Location
	define(LANG_EVENT_LOCATIONS, "Ubicaci�n");
	//Featured Events
	define(LANG_EVENT_FEATURED, "Eventos Presentados");
	//events
	define(LANG_EVENT_PLURAL, "Eventos");
	//Search results
	define(LANG_SEARCHRESULTS, "Buscar resultados");
	//Results
	define(LANG_RESULTS, "Resultados");
	//Search results "for" keyword
	define(LANG_SEARCHRESULTS_KEYWORD, "para");
	//Search results "in" where
	define(LANG_SEARCHRESULTS_WHERE, "en");
	//Search results "in" template
	define(LANG_SEARCHRESULTS_TEMPLATE, "en");
	//Search results "in" category
	define(LANG_SEARCHRESULTS_CATEGORY, "en");
	//Search results "in category"
	define(LANG_SEARCHRESULTS_INCATEGORY, "en la categor�a");
	//Search results "in" location
	define(LANG_SEARCHRESULTS_LOCATION, "en");
	//Search results "in" zip
	define(LANG_SEARCHRESULTS_ZIP, "en");
	//Search results "for" date
	define(LANG_SEARCHRESULTS_DATE, "para");
	//Search results - "Page" X
	define(LANG_SEARCHRESULTS_PAGE, "P�gina");
	//Recent Reviews
	define(LANG_RECENT_REVIEWS, "Comentarios Recientes");
	//Reviews of
	define(LANG_REVIEWSOF, "Revisiones de");
	//Reviews are disabled
	define(LANG_REVIEWDISABLE, "Las calificaciones est�n desactivadas");
	//View all categories
	define(LANG_ARTICLE_VIEWALLCATEGORIES, "Ver todas las categor�as");
	//View all categories
	define(LANG_PROMOTION_VIEWALLCATEGORIES, "Ver todas las categor�as");
	//Offer
	define(LANG_PROMOTION_OFFER, "Oferta");
	//Description
	define(LANG_PROMOTION_DESCRIPTION, "Descripci�n");
	//Conditions
	define(LANG_PROMOTION_CONDITIONS, "Condiciones");
	//Location
	define(LANG_PROMOTION_LOCATIONS, "Ubicaci�n");
	//Item not found!
	define(LANG_MSG_NOTFOUND, "No se encontr� el elemento.");
	//Item not available!
	define(LANG_MSG_NOTAVAILABLE, "El elemento no est� disponible.");
	//Listing Search Results
	define(LANG_MSG_LISTINGRESULTS, "Resultados de la B�squeda de Listas");
	//Promotion Search Results
	define(LANG_MSG_PROMOTIONRESULTS, "Resultados de la B�squeda de Promociones");
	//Event Search Results
	define(LANG_MSG_EVENTRESULTS, "Resultados de la B�squeda de Eventos");
	//Classified Search Results
	define(LANG_MSG_CLASSIFIEDRESULTS, "Resultados de la B�squeda de Clasificados");
	//Article Search Results
	define(LANG_MSG_ARTICLERESULTS, "Resultados de la B�squeda de Art�culos");

	# ----------------------------------------------------------------------------------------------------
	# MEMBERS
	# ----------------------------------------------------------------------------------------------------
	//Enjoy our Services!
	define(LANG_ENJOY_OUR_SERVICES, "Disfrute los servicios.");
	//Remove association with
	define(LANG_REMOVE_ASSOCIATION_WITH, "Quitar asociaci�n con");
	//Welcome
	define(LANG_LABEL_WELCOME, "Bienvenido");
	//Member Options
	define(LANG_LABEL_MEMBER_OPTIONS, "Opciones de miembro");
	//Back to Search
	define(LANG_LABEL_BACK_TO_SEARCH, "Volver a la b�squeda");
	//Add New Account
	define(LANG_LABEL_ADD_NEW_ACCOUNT, "Agregar nueva cuenta");
	//Forgotten password
	define(LANG_LABEL_FORGOTTEN_PASSWORD, "Contrase�a olvidada");
	//Click here
	define(LANG_LABEL_CLICK_HERE, "Haga clic aqu�");
	//Help
	define(LANG_LABEL_HELP, "Ayuda");
	//Reset Password
	define(LANG_LABEL_RESET_PASSWORD, "Restablecer Contrase�a");
	//Account and Contact Information
	define(LANG_LABEL_ACCOUNT_AND_CONTACT_INFO, "Informaci�n del contacto y de la cuenta");
	//Signup Notification
	define(LANG_LABEL_SIGNUP_NOTIFICATION, "Notificaci�n de registro");
	//Go to login
	define(LANG_LABEL_GO_TO_LOGIN, "Ir a Inicio de sesi�n");
	//Order
	define(LANG_LABEL_ORDER, "Solicitar");
	//Check Out
	define(LANG_LABEL_CHECKOUT, "Pagar");
	//Configuration
	define(LANG_LABEL_CONFIGURATION, "Configuraci�n");
	//Category Detail
	define(LANG_LABEL_CATEGORY_DETAIL, "Detalle de la categor�a");
	//Site Manager
	define(LANG_LABEL_SITE_MANAGER, "Administrador del sitio");
	//Summary page
	define(LANG_LABEL_SUMMARY_PAGE, "P�gina de resumen");
	//Detail page
	define(LANG_LABEL_DETAIL_PAGE, "P�gina de detalles");
	//Photo Gallery
	define(LANG_LABEL_PHOTO_GALLERY, "Galer�a de fotos");
	//Add Banner
	define(LANG_LABEL_ADDBANNER, "Agregar Banner");
	//Gallery Image Information
	define(LANG_LABEL_GALLERYIMAGEINFORMATION, "Informaci�n de im�genes de la galer�a");
	//Gallery Images
	define(LANG_LABEL_GALLERYIMAGES, "Im�genes de la galer�a");
	//Manage Gallery Images
	define(LANG_LABEL_MANAGEGALLERYIMAGES, "Administrar im�genes de la galer�a");
	//Manage Galleries
	define(LANG_LABEL_MANAGEGALLERY_PLURAL, "Administrar Galer�as");
	//Gallery does not exist!
	define(LANG_LABEL_GALLERYDOESNOTEXIST, "La galer�a no existe.");
	//Gallery not available!
	define(LANG_LABEL_GALLERYNOTAVAILABLE, "La galer�a no est� disponible.");
	//Custom Invoice Title
	define(LANG_LABEL_CUSTOM_INVOICE_TITLE, "T�tulo de la factura personalizada");
	//Custom Invoice Items
	define(LANG_LABEL_CUSTOM_INVOICE_ITEMS, "Elementos de la factura personalizada");
	//Easy and Fast.
	define(LANG_LABEL_EASY_AND_FAST, "F�cil y r�pido.");
	//Steps
	define(LANG_LABEL_STEPS, "Pasos");
	//Account Signup
	define(LANG_LABEL_ACCOUNT_SIGNUP, "Registrar cuenta");
	//Select a Package
	define(LANG_LABEL_SELECT_PACKAGE, "Seleccionar un paquete");
	//Payment Status
	define(LANG_LABEL_PAYMENTSTATUS, "Estado del pago");
	//Expiration
	define(LANG_LABEL_EXPIRATION, "Vencimiento");
	//Add New Gallery
	define(LANG_LABEL_ADDNEWGALLERY, "Agregar nueva galer�a");
	//Add a new gallery
	define(LANG_LABEL_ADDANEWGALLERY, "Agregar una nueva Galer�a");
	//Add New Promotion
	define(LANG_LABEL_ADDNEWPROMOTION, "Agregar nueva Promoci�n");
	//Add a new promotion
	define(LANG_LABEL_ADDANEWPROMOTION, "Agregar una nueva Promoci�n");
	//Manage Billing
	define(LANG_LABEL_MANAGEBILLING, "Administrar Cuentas");
	//Click here if you have your password already.
	define(LANG_MSG_CLICK_IF_YOU_HAVE_PASSWORD, "Haga clic aqu� si ya tiene una contrase�a.");
	//Not a member?
	define(LANG_MSG_NOT_A_MEMBER, "�No es miembro?");
	//for information on adding your item to
	define(LANG_MSG_FOR_INFORMATION_ON_ADDING_YOUR_ITEM, "para obtener informaci�n acerca de c�mo agregar su elemento a");
	//Welcome to the Member Section
	define(LANG_MSG_WELCOME, "Bienvenido a la secci�n de miembros");
	//"Account locked. Wait" X minute(s) and try again.
	define(LANG_MSG_ACCOUNTLOCKED1, "Cuenta bloqueada. Espere");
	//Account locked. Wait X "minute(s) and try again."
	define(LANG_MSG_ACCOUNTLOCKED2, "minuto(s) e intente nuevamente.");
	//Please, confirm your contact information before continue. One or more informations are required to directory works correctly.
	define(LANG_MSG_FOREIGNACCOUNTWARNING, "Por favor, confirme su informaci�n de contacto antes de continuar. Uno o m�s informaci�nes son necesarias para el directorio funcionar correctamente.");
	//You don't have access permission from this IP address!
	define(LANG_MSG_YOUDONTHAVEACCESSFROMTHISIPADDRESS, "Usted no tiene permiso de acceso de esta direcci�n IP!");
	//Sorry, your username or password is incorrect.
	define(LANG_MSG_USERNAME_OR_PASSWORD_INCORRECT, "El nombre de usuario o la contrase�a son incorrectos.");
	//Sorry, wrong account.
	define(LANG_MSG_WRONG_ACCOUNT, "Cuenta err�nea.");
	//Sorry, wrong key.
	define(LANG_MSG_WRONG_KEY, "Clave err�nea.");
	//OpenID Server not available!
	define(LANG_MSG_OPENID_SERVER, "El OpenID servidor no est� disponible!");
	//Error requesting OpenID Server!
	define(LANG_MSG_OPENID_ERROR, "Error al llamar al servidor de OpenID!");
	//OpenID request canceled!
	define(LANG_MSG_OPENID_CANCEL, "OpenID solicitud cancelada!");
	//Invalid OpenID Identity!
	define(LANG_MSG_OPENID_INVALID, "No v�lido de identidad OpenID!");
	//Forgot your password?
	define(LANG_MSG_FORGOT_YOUR_PASSWORD, "�Olvid� su contrase�a?");
	//Account successfully updated!
	define(LANG_MSG_ACCOUNT_SUCCESSFULLY_UPDATED, "Se actualiz� correctamente la cuenta.");
	//Password successfully updated!
	define(LANG_MSG_PASSWORD_SUCCESSFULLY_UPDATED, "Contrase�a correctamente actualizada.");
	//"Thank you for signing up for an account in" [EDIRECTORY_TITLE]
	define(LANG_MSG_THANK_YOU_FOR_SIGNING_UP, "Gracias por registrar su cuenta en");
	//Login to manage your account with the username and password below.
	define(LANG_MSG_LOGIN_TO_MANAGE_YOUR_ACCOUNT, "Inicie sesi�n para administrar su cuenta con el nombre de usuario y la contrase�a que figuran a continuaci�n.");
	//You can see
	define(LANG_MSG_YOU_CAN_SEE, "Podr� ver");
	//Your account in
	define(LANG_MSG_YOUR_ACCOUNT_IN, "Su cuenta en");
	//"This [ITEM] will show" [UNLIMITED|the max of X] photos per gallery.
	define(LANG_MSG_ARTICLE_WILL_SHOW, "Este art�culo mostrar�");
	//"This [ITEM] will show" [UNLIMITED|the max of X] photos per gallery.
	define(LANG_MSG_CLASSIFIED_WILL_SHOW, "Este clasificado mostrar�");
	//"This [ITEM] will show" [UNLIMITED|the max of X] photos per gallery.
	define(LANG_MSG_EVENT_WILL_SHOW, "Este evento mostrar�");
	//"This [ITEM] will show" [UNLIMITED|the max of X] photos per gallery.
	define(LANG_MSG_LISTING_WILL_SHOW, "Esta lista mostrar�");
	//This [ITEM] will show [UNLIMITED|"the max of" X] photos per gallery.
	define(LANG_MSG_THE_MAX_OF, "la cantidad m�xima de");
	//This [ITEM] will show [UNLIMITED|the max of X] "photos" per gallery.
	define(LANG_MSG_GALLERY_PHOTO, "foto");
	//This [ITEM] will show [UNLIMITED|the max of X] "photos" per gallery.
	define(LANG_MSG_GALLERY_PHOTOS, "fotos");
	//This [ITEM] will show [UNLIMITED|the max of X] photos "per gallery."
	define(LANG_MSG_PER_GALLERY, "por galer�a.");
	//or Associate an existing gallery with this article
	define(LANG_MSG_ASSOCIATE_EXISTING_GALLERY_WITH_ARTICLE, "o asociar una galer�a existente con este art�culo");
	//or Associate an existing gallery with this classified
	define(LANG_MSG_ASSOCIATE_EXISTING_GALLERY_WITH_CLASSIFIED, "o asociar una galer�a existente con este clasificado");
	//or Associate an existing gallery with this event
	define(LANG_MSG_ASSOCIATE_EXISTING_GALLERY_WITH_EVENT, "o asociar una galer�a existente con este evento");
	//or Associate an existing gallery with this listing
	define(LANG_MSG_ASSOCIATE_EXISTING_GALLERY_WITH_LISTING, "o asociar una galer�a existente con esta lista");
	//Continue to pay for your article.
	define(LANG_MSG_CONTINUE_TO_PAY_ARTICLE, "Contin�e para pagar su art�culo");
	//Continue to pay for your banner.
	define(LANG_MSG_CONTINUE_TO_PAY_BANNER, "Contin�e para pagar su banner");
	//Continue to pay for your classified.
	define(LANG_MSG_CONTINUE_TO_PAY_CLASSIFIED, "Contin�e para pagar su clasificado");
	//Continue to pay for your event.
	define(LANG_MSG_CONTINUE_TO_PAY_EVENT, "Contin�e para pagar su evento");
	//Continue to pay for your listing.
	define(LANG_MSG_CONTINUE_TO_PAY_LISTING, "Contin�e para pagar su lista");
	//Articles are activated by
	define(LANG_MSG_ARTICLES_ARE_ACTIVATED_BY, "Los art�culos est�n activados por");
	//Banners are activated by
	define(LANG_MSG_BANNERS_ARE_ACTIVATED_BY, "Los banners est�n activados por");
	//Classifieds are activated by
	define(LANG_MSG_CLASSIFIEDS_ARE_ACTIVATED_BY, "Los clasificados est�n activados por");
	//Events are activated by
	define(LANG_MSG_EVENTS_ARE_ACTIVATED_BY, "Los eventos est�n activados por");
	//Listings are activated by
	define(LANG_MSG_LISTINGS_ARE_ACTIVATED_BY, "Las listas est�n activadas por");
	//only after the process is complete.
	define(LANG_MSG_ONLY_PROCCESS_COMPLETE, "solo despu�s de que se haya completado el proceso.");
	//Tips for the Item Map Tuning
	define(LANG_MSG_TIPSFORMAPTUNING, "Sugerencias para el ajuste de mapa de los elementos");
	//You can adjust the position in the map,
	define(LANG_MSG_YOUCANADJUSTPOSITION, "Puede ajustar la posici�n en el mapa,");
	//with more accuracy.
	define(LANG_MSG_WITH_MORE_ACCURACY, "con m�s precisi�n.");
	//Use the controls "+" and "-" to adjust the map zoom.
	define(LANG_MSG_USE_CONTROLS_TO_ADJUST, "Acerque o aleje el mapa con los controles \"+\" y \"-\".");
	//Use the arrows to navigate on map.
	define(LANG_MSG_USE_ARROWS_TO_NAVIGATE, "Despl�cese por el mapa con las flechas.");
	//Drag-and-Drop the marker to adjust the location.
	define(LANG_MSG_DRAG_AND_DROP_MARKER, "Arrastre y suelte el marcador para ajustar la ubicaci�n.");
	//Your promotion will appear here
	define(LANG_MSG_PROMOTION_WILL_APPEAR_HERE, "Su promoci�n aparecer� aqu�");
	//or Associate an existing promotion with this listing
	define(LANG_MSG_ASSOCIATE_EXISTING_PROMOTION, "o asociar una promoci�n existente con esta lista");
	//No results found!
	define(LANG_MSG_NO_RESULTS_FOUND, "No se encontraron resultados.");
	//Access not allowed!
	define(LANG_MSG_ACCESS_NOT_ALLOWED, "No se permite el acceso.");
	//The following problems were found
	define(LANG_MSG_PROBLEMS_WERE_FOUND, "Se encontraron los siguientes problemas");
	//No items selected or requiring payment.
	define(LANG_MSG_NO_ITEMS_SELECTED_REQUIRING_PAYMENT, "No hay elementos seleccionados que requieran pagarse.");
	//No items found.
	define(LANG_MSG_NO_ITEMS_FOUND, "No se encontraron elementos.");
	//No invoices in the system.
	define(LANG_MSG_NO_INVOICES_IN_THE_SYSTEM, "No hay facturas en el sistema.");
	//No transactions in the system.
	define(LANG_MSG_NO_TRANSACTIONS_IN_THE_SYSTEM, "No hay transacciones en el sistema.");
	//Claim this Listing
	define(LANG_MSG_CLAIM_THIS_LISTING, "Reclame esta Lista");
	//Go to membros check out area
	define(LANG_MSG_GO_TO_MEMBERS_CHECKOUT, "Vaya al �rea de pago de los miembros");
	//You can see your invoice in
	define(LANG_MSG_YOU_CAN_SEE_INVOICE, "Puede ver su factura en");
	//I agree to terms!
	define(LANG_MSG_AGREE_TO_TERMS, "Acepto los t�rminos.");
	//and I will send payment!
	define(LANG_MSG_I_WILL_SEND_PAYMENT, "y enviar� el pago.");
	//This page will redirect you to your member area in few seconds.
	define(LANG_MSG_THIS_PAGE_WILL_REDIRECT_YOU, "Esta p�gina lo dirigir�, en algunos segundos, al �rea de miembros.");
	//This page will redirect you to continue your signup process in few seconds.
	define(LANG_MSG_THIS_PAGE_WILL_REDIRECT_YOU_SIGNUP, "Esta p�gina lo dirigir�, en algunos segundos, para que pueda continuar el proceso de registro.");
	//"If it doesn't work, please" click here
	define(LANG_MSG_IF_IT_DOES_NOT_WORK, "Si no funciona,");
	//Manage Article
	define(LANG_MANAGE_ARTICLE, "Administrar Art�culo");
	//Manage Banner
	define(LANG_MANAGE_BANNER, "Administrar Banner");
	//Manage Classified
	define(LANG_MANAGE_CLASSIFIED, "Administrar Clasificado");
	//Manage Event
	define(LANG_MANAGE_EVENT, "Administrar Evento");
	//Manage Listing
	define(LANG_MANAGE_LISTING, "Administrar Lista");
	//Manage Promotion
	define(LANG_MANAGE_PROMOTION, "Administrar Promoci�n");
	//Manage Billing
	define(LANG_MANAGE_BILLING, "Administrar cuentas");
	//Manage Invoices
	define(LANG_MANAGE_INVOICES, "Administrar facturas");
	//Manage Transactions
	define(LANG_MANAGE_TRANSACTIONS, "Administrar Transacciones");
	//No articles in the system.
	define(LANG_NO_ARTICLES_IN_THE_SYSTEM, "No hay art�culos en el sistema.");
	//No banners in the system.
	define(LANG_NO_BANNERS_IN_THE_SYSTEM, "No hay banners en el sistema.");
	//No classifieds in the system.
	define(LANG_NO_CLASSIFIEDS_IN_THE_SYSTEM, "No hay clasificados en el sistema.");
	//No events in the system. 
	define(LANG_NO_EVENTS_IN_THE_SYSTEM, "No hay eventos en el sistema.");
	//No galleries in the system.
	define(LANG_NO_GALLERIES_IN_THE_SYSTEM, "No hay galer�as en el sistema.");
	//No listings in the system.
	define(LANG_NO_LISTINGS_IN_THE_SYSTEM, "No hay listas en el sistema.");
	//No promotions in the system.
	define(LANG_NO_PROMOTIONS_IN_THE_SYSTEM, "No hay promociones en el sistema.");
	//No Reports Available.
	define(LANG_NO_REPORTS, "No hay informes disponibles.");
	//No article found. It might be deleted.
	define(LANG_NO_ARTICLE_FOUND, "No se encontr� el art�culo. Es posible que se haya eliminado.");
	//No classified found. It might be deleted.
	define(LANG_NO_CLASSIFIED_FOUND, "No se encontr� el clasificado. Es posible que se haya eliminado.");
	//No listing found. It might be deleted.
	define(LANG_NO_LISTING_FOUND, "No se encontr� la lista. Es posible que se haya eliminado.");
	//Article Information
	define(LANG_ARTICLE_INFORMATION, "Informaci�n del Art�culo");
	//Delete Article
	define(LANG_ARTICLE_DELETE, "Eliminar Art�culo");
	//Delete Article Information
	define(LANG_ARTICLE_DELETE_INFORMATION, "Eliminar informaci�n del Art�culo");
	//Are you sure you want to delete this article
	define(LANG_ARTICLE_DELETE_CONFIRM, "�Confirma que desea eliminar este art�culo?");
	//Article Gallery
	define(LANG_ARTICLE_GALLERY, "Galer�a de Art�culo");
	//Article Preview
	define(LANG_ARTICLE_PREVIEW, "Vista previa de Art�culo");
	//Article Traffic Report
	define(LANG_ARTICLE_TRAFFIC_REPORT, "Informe de tr�fico del Art�culo");
	//Article Detail
	define(LANG_ARTICLE_DETAIL, "Detalle del Art�culo");
	//Edit Article Information
	define(LANG_ARTICLE_EDIT_INFORMATION, "Modificar informaci�n del Art�culo");
	//Delete Banner
	define(LANG_BANNER_DELETE, "Eliminar Banner");
	//Delete Banner Information
	define(LANG_BANNER_DELETE_INFORMATION, "Eliminar informaci�n del Banner");
	//Are you sure you want to delete this banner?
	define(LANG_BANNER_DELETE_CONFIRM, "�Confirma que desea eliminar este banner?");
	//Edit Banner
	define(LANG_BANNER_EDIT, "Modificar Banner");
	//Edit Banner Information
	define(LANG_BANNER_EDIT_INFORMATION, "Modificar informaci�n del Banner");
	//Banner Preview
	define(LANG_BANNER_PREVIEW, "Vista previa del Banner");
	//Banner Traffic Report
	define(LANG_BANNER_TRAFFIC_REPORT, "Informe de tr�fico del Banner");
	//View Banner
	define(LANG_VIEW_BANNER, "Ver Banner");
	//Classified Information
	define(LANG_CLASSIFIED_INFORMATION, "Informaci�n del Clasificado");
	//Delete Classified
	define(LANG_CLASSIFIED_DELETE, "Eliminar Clasificado");
	//Delete Classified Information
	define(LANG_CLASSIFIED_DELETE_INFORMATION, "Eliminar informaci�n del Clasificado");
	//Are you sure you want to delete this classified
	define(LANG_CLASSIFIED_DELETE_CONFIRM, "�Confirma que desea eliminar este clasificado ?");
	//Classified Gallery
	define(LANG_CLASSIFIED_GALLERY, "Galer�a de Clasificado");
	//Classified Map Tuning
	define(LANG_CLASSIFIED_MAP_TUNING, "Ajuste de mapa del Clasificado");
	//Classified Preview
	define(LANG_CLASSIFIED_PREVIEW, "Vista previa del Clasificado");
	//Classified Traffic Report
	define(LANG_CLASSIFIED_TRAFFIC_REPORT, "Informe de tr�fico del Clasificado");
	//Classified Detail
	define(LANG_CLASSIFIED_DETAIL, "Detalle del Clasificado");
	//Edit Classified Information
	define(LANG_CLASSIFIED_EDIT_INFORMATION, "Modificar informaci�n del Clasificado");
	//Edit Classified Level
	define(LANG_CLASSIFIED_EDIT_LEVEL, "Modificar nivel del Clasificado");
	//Delete Event
	define(LANG_EVENT_DELETE, "Eliminar Evento");
	//Delete Event Information
	define(LANG_EVENT_DELETE_INFORMATION, "Eliminar informaci�n del Evento");
	//Are you sure you want to delete this event
	define(LANG_EVENT_DELETE_CONFIRM, "�Confirma que desea eliminar este evento ?");
	//Event Information
	define(LANG_EVENT_INFORMATION, "Informaci�n del Evento");
	//Event Gallery
	define(LANG_EVENT_GALLERY, "Galer�a del Evento");
	//Event Map Tuning
	define(LANG_EVENT_MAP_TUNING, "Ajuste de mapa del Evento");
	//Event Preview
	define(LANG_EVENT_PREVIEW, "Vista previa del Evento");
	//Event Traffic Report
	define(LANG_EVENT_TRAFFIC_REPORT, "Informe de tr�fico del Evento");
	//Event Detail
	define(LANG_EVENT_DETAIL, "Detalle del Evento");
	//Edit Event Information
	define(LANG_EVENT_EDIT_INFORMATION, "Modificar informaci�n del Evento");
	//Listing Gallery
	define(LANG_LISTING_GALLERY, "Galer�a de la Lista");
	//Listing Information
	define(LANG_LISTING_INFORMATION, "Informaci�n de la Lista");
	//Listing Map Tuning
	define(LANG_LISTING_MAP_TUNING, "Ajuste de mapa de la Lista");
	//Listing Preview
	define(LANG_LISTING_PREVIEW, "Vista previa de la Lista");
	//Listing Promotion
	define(LANG_LISTING_PROMOTION, "Promoci�n de la Lista");
	//The promotion is linked from the listing.
	define(LANG_LISTING_PROMOTION_IS_LINKED, "La promoci�n est� vinculada desde la lista.");
	//To be active the promotion
	define(LANG_LISTING_TO_BE_ACTIVE_PROMOTION, "Para estar activa, la promoci�n");
	//must have an end date in the future
	define(LANG_LISTING_END_DATE_IN_FUTURE, "debe tener una fecha de finalizaci�n en el futuro");
	//must be associated with a listing
	define(LANG_LISTING_ASSOCIATED_WITH_LISTING, "debe estar asociada con una lista");
	//Listing Traffic Report
	define(LANG_LISTING_TRAFFIC_REPORT, "Informe de tr�fico de la Lista");
	//Listing Detail
	define(LANG_LISTING_DETAIL, "Detalle de la Lista");
	//for listing
	define(LANG_LISTING_FOR_LISTING, "para lista");
	//Listing Update
	define(LANG_LISTING_UPDATE, "Actualizaci�n");
	//Delete Promotion
	define(LANG_PROMOTION_DELETE, "Eliminar Promoci�n");
	//Delete Promotion Information
	define(LANG_PROMOTION_DELETE_INFORMATION, "Eliminar informaci�n de la Promoci�n");
	//Are you sure you want to delete this promotion
	define(LANG_PROMOTION_DELETE_CONFIRM, "�Confirma que desea eliminar esta promoci�n?");
	//Promotion Preview
	define(LANG_PROMOTION_PREVIEW, "Vista previa de la Promoci�n");
	//Promotion Information
	define(LANG_PROMOTION_INFORMATION, "Informaci�n de la Promoci�n");
	//Promotion Detail
	define(LANG_PROMOTION_DETAIL, "Detalle de la Promoci�n");
	//Edit Promotion Information
	define(LANG_PROMOTION_EDIT_INFORMATION, "Modificar informaci�n de la Promoci�n");
	//Delete Gallery
	define(LANG_GALLERY_DELETE, "Eliminar galer�a");
	//Delete Gallery Information
	define(LANG_GALLERY_DELETE_INFORMATION, "Eliminar informaci�n de la galer�a");
	//Are you sure you want to delete this gallery? This will remove all gallery information, photos and relationships.
	define(LANG_GALLERY_DELETE_CONFIRM, "�Confirma que desea eliminar esta galer�a? Esto quitar� la totalidad de la informaci�n, las fotos y las relaciones de la galer�a.");
	//Delete Gallery Image
	define(LANG_GALLERY_IMAGE_DELETE, "Eliminar imagen de la galer�a");
	//Gallery Information
	define(LANG_GALLERY_INFORMATION, "Informaci�n de la galer�a");
	//Gallery Preview
	define(LANG_GALLERY_PREVIEW, "Vista previa de la galer�a");
	//Gallery Detail
	define(LANG_GALLERY_DETAIL, "Detalle de la galer�a");
	//Edit Gallery Information
	define(LANG_GALLERY_EDIT_INFORMATION, "Modificar informaci�n de la galer�a");
	//Manage Images
	define(LANG_GALLERY_MANAGE_IMAGES, "Administrar im�genes");
	//Delete Image
	define(LANG_IMAGE_DELETE, "Eliminar imagen");
	//Image successfully deleted!
	define(LANG_IMAGE_SUCCESSFULLY_DELETED, "Se elimin� correctamente la imagen.");
	//Review Detail
	define(LANG_REVIEW_DETAIL, "Detalle de la calificaci�n");
	//Review Preview
	define(LANG_REVIEW_PREVIEW, "Vista previa de la calificaci�n");
	//Invoice Detail
	define(LANG_INVOICE_DETAIL, "Detalle de la factura");
	//Invoice not found for this account.
	define(LANG_INVOICE_NOT_FOUND_FOR_ACCOUNT, "No se encontr� la factura de esta cuenta.");
	//Invoice Notification
	define(LANG_INVOICE_NOTIFICATION, "Notificaci�n de la factura");
	//Transaction Detail
	define(LANG_TRANSACTION_DETAIL, "Detalle de la transacci�n");
	//Transaction not found for this account.
	define(LANG_TRANSACTION_NOT_FOUND_FOR_ACCOUNT, "No se encontr� la transacci�n de esta cuenta.");

?>
