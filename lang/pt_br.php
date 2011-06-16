<?php

	//january,february,march,april,may,june,july,august,september,october,november,december
	define(LANG_DATE_MONTHS, "janeiro,fevereiro,mar�o,abril,maio,junho,julho,agosto,setembro,outubro,novembro,dezembro");
	//sunday,monday,tuesday,wednesday,thursday,friday,saturday
	define(LANG_DATE_WEEKDAYS, "domingo,segunda-feira,ter�a-feira,quarta-feira,quinta-feira,sexta-feira,s�bado");
	//year
	define(LANG_YEAR, "ano");
	//month
	define(LANG_MONTH, "m�s");
	//day
	define(LANG_DAY, "dia");
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
	define(ZIPCODE_UNIT, "km");
	//mile
	define(ZIPCODE_UNIT_LABEL, "km");
	//miles
	define(ZIPCODE_UNIT_LABEL_PLURAL, "km");
	//zipcode
	define(ZIPCODE_LABEL, "CEP");

	# ----------------------------------------------------------------------------------------------------
	# JAVASCRIPT
	# ----------------------------------------------------------------------------------------------------
	//Wait, Loading Category Tree...
	define(LANG_JS_LOADCATEGORYTREE, "Aguarde, Carregando a �rvore de Categorias...");
	//Loading...
	define(LANG_JS_LOADING, "Carregando...");
	//This item was added to your Quick List. You can view your Quick List by clicking on 'View Quick List' link.
	define(LANG_JS_FAVORITEADD, "Este item foi adicionado aos seus Favoritos.\n\nPara ver a sua lista de Favoritos clique em 'Meus Favoritos'.");
	//This item was removed from your Quick List.
	define(LANG_JS_FAVORITEDEL, "Este item foi removido dos seus Favoritos.");
	//Google Map is not available for the current address.
	define(LANG_JS_GOOGLEMAPS_NOTAVAILABLE_ADDRESS, "Google Map n�o est� dispon�vel para este endere�o.");
	//Invalid date format
	define(LANG_JS_CALENDAR_INVALIDDATEFORMAT, "Formato de data inv�lido");
	//Invalid year value
	define(LANG_JS_CALENDAR_INVALIDYEARVALUE, "Valor do ano inv�lido");
	//Invalid month value
	define(LANG_JS_CALENDAR_INVALIDMONTHVALUE, "Valor do m�s inv�lido");
	//Invalid day of month value
	define(LANG_JS_CALENDAR_INVALIDDAYMONTHVALUE, "Valor do dia do m�s inv�lido");
	//Invalid hours value
	define(LANG_JS_CALENDAR_INVALIDHOURSVALUE, "Valor da hora inv�lido");
	//Invalid minutes value
	define(LANG_JS_CALENDAR_INVALIDMINUTESVALUE, "Valor do minuto inv�lido");
	//Invalid seconds value
	define(LANG_JS_CALENDAR_INVALIDSECONDSVALUE, "Valor do segundo inv�lido");
	//"Format accepted is" xx-xx-xxxx
	define(LANG_JS_CALENDAR_FORMATACCEPTED, "Formato aceito �");
	//"Allowed range is" xx-xx
	define(LANG_JS_CALENDAR_ALLOWEDRANGE, "O intervalo permitido �");
	//Allowed values are unsigned integers
	define(LANG_JS_CALENDAR_ALLOWEDVALUESUNSIGNEDINTEGERS, "S� � permitido valores inteiros positivos");
	//No year value can be found
	define(LANG_JS_CALENDAR_NOYEARVALUE, "Valor do ano n�o encontrado");
	//No month value can be found
	define(LANG_JS_CALENDAR_NOMONTHVALUE, "Valor do m�s n�o encontrado");
	//No day of month value can be found
	define(LANG_JS_CALENDAR_NODAYMONTHVALUE, "Valor do dia do m�s n�o encontrado");
	//weak
	define(LANG_JS_LABEL_WEAK, "fraco");
	//bad
	define(LANG_JS_LABEL_BAD, "ruim");
	//good
	define(LANG_JS_LABEL_GOOD, "bom");
	//strong
	define(LANG_JS_LABEL_STRONG, "forte");
	//There was a problem retrieving the XML data:
	define(LANG_JS_ACCOUNTSEARCH_PROBLEMRETRIEVING, 'Ocorreu um problema ao requisitar os dados em XML:');
	//Click here to select an account.
	define(LANG_JS_ACCOUNTSEARCH_CLICKHERETOSELECT, 'Clique aqui para selecionar uma conta');
	//Please provide at least a 3 letra word for the search!
	define(LANG_JS_ACCOUNTSEARCH_PLEASEPROVIDEATLEAST, 'Por favor, digite pelo menos 3 letras ao efetuar uma busca!');
	//Server response failure!
	define(LANG_JS_ACCOUNTSEARCH_SERVERRESPONSEFAILURE, 'Falha de resposta do servidor!');
	//Close
	define(LANG_JS_CLOSE, "Fechar");

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
	define(LANG_NA, "n.d.");
	//characters
	define(LANG_LABEL_CHARACTERES, "caracteres");
	//by
	define(LANG_BY, "por");
	//Read More
	define(LANG_READMORE, "Leia Mais");
	//Browse by Category
	define(LANG_BROWSEBYCATEGORY, "Procure por Categoria");
	//Browse by Location
	define(LANG_BROWSEBYLOCATION, "Procure por Localidade");
	//Bill to
	define(LANG_BILLTO, "Pago por");
	//Issuing Date
	define(LANG_ISSUINGDATE, "Data de Emiss�o");
	//Expire Date
	define(LANG_EXPIREDATE, "Data de Vencimento");
	//Questions
	define(LANG_QUESTIONS, "D�vidas");
	//Please call
	define(LANG_PLEASECALL, "Por favor ligue para");
	//Invoice Info
	define(LANG_INVOICEINFO, "Informa��es da Fatura");
	//Payment Date
	define(LANG_PAYMENTDATE, "Data do Pagamento");
	//None
	define(LANG_NONE, "Nenhum");
	//Custom Invoice
	define(LANG_CUSTOM_INVOICES, "Servi�os Extras");
	//Locations
	define(LANG_LOCATIONS, "Localiza��o");
	//Close
	define(LANG_CLOSE, "Fechar");
	//Close this window
	define(LANG_CLOSEWINDOW, "Fechar esta janela");
	//Close this window
	define(LANG_LABEL_CLOSETHISWINDOW, "Fechar esta janela");
	//from
	define(LANG_FROM, "de");
	//Transaction Info
	define(LANG_TRANSACTION_INFO, "Informa��es da Transa��o");
	//creditcard
	define(LANG_CREDITCARD, "cart�o de cr�dito");
	//Join Now!
	define(LANG_JOIN_NOW, "Registre-se Agora!");
	//More Info
	define(LANG_MOREINFO, "Mais Informa��es");
	//and
	define(LANG_AND, "e");
	//Keyword sample 1: "Auto Parts"
	define(LANG_KEYWORD_SAMPLE_1, "Auto Pe�as");
	//Keyword sample 2: "Tires"
	define(LANG_KEYWORD_SAMPLE_2, "Pneus e Rodas");
	//Keyword sample 3: "Engine Repair"
	define(LANG_KEYWORD_SAMPLE_3, "Reparo de Motor");
	//Categories and sub-categories
	define(LANG_CATEGORIES_SUBCATEGS, "Categorias e subcategorias");
	//per
	define(LANG_PER, "por");
	//each
	define(LANG_EACH, "cada");
	//impressions block
	define(LANG_IMPRESSIONSBLOCK, "blocos de visualiza��es");
	//Add
	define(LANG_ADD, "Adicionar");
	//Manage
	define(LANG_MANAGE, "Gerenciar");
	//impressions to my paid credit of
	define(LANG_IMPRESSIONPAIDOF, "visualiza��es ao meu cr�dito de");
	//Section
	define(LANG_SECTION, "Se��o");
	//General Pages
	define(LANG_GENERALPAGES, "P�ginas Gerais");
	//Open in a new window
	define(LANG_OPENNEWWINDOW, "Abrir em uma nova janela");
	//No
	define(LANG_NO, "N�o");
	//Yes
	define(LANG_YES, "Sim");
	//Dear
	define(LANG_DEAR, "Querido(a)");
	//Street Address, P.O. box
	define(LANG_ADDRESS_EXAMPLE, "Endere�o, Caixa Postal");
	//Apartment, suite, unit, building, floor, etc.
	define(LANG_ADDRESS2_EXAMPLE, "Apartamento, suite, unidade, pr�dio, andar, etc.");
	//or
	define(LANG_OR, "ou");
	//Hour of Work sample 1: "Sun 8:00 am - 6:00 pm"
	define(LANG_HOURWORK_SAMPLE_1, "Segunda � Sexta - 8:00 �s 18:00");
	//Hour of Work sample 2: "Mon 8:00 am - 9:00 pm"
	define(LANG_HOURWORK_SAMPLE_2, "S�bado - 8:00 �s 14:00");
	//Hour of Work sample 3: "Tue 8:00 am - 9:00 pm"
	define(LANG_HOURWORK_SAMPLE_3, "Domingo - 10:00 �s 12:00");
	//Extra fields
	define(LANG_EXTRA_FIELDS, "Campos Adicionais");
	//Log me in automatically
	define(LANG_AUTOLOGIN, "Entrar automaticamente");
	//Check / Uncheck All
	define(LANG_CHECK_UNCHECK_ALL, "Marcar / Desmarcar Todos");
	//Billing Information
	define(LANG_BIILING_INFORMATION, "Informa��es da Fatura");
	//on Listing
	define(LANG_ON_LISTING, "no estabelecimento");
	//on Event
	define(LANG_ON_EVENT, "no Evento");
	//on Banner
	define(LANG_ON_BANNER, "no Banner");
	//on Classified
	define(LANG_ON_CLASSIFIED, "no Classificado");
	//on Article
	define(LANG_ON_ARTICLE, "no Artigo");
	//Listing Name
	define(LANG_LISTING_NAME, "Nome do estabelecimento");
	//Event Name
	define(LANG_EVENT_NAME, "Nome do Evento");
	//Banner Name
	define(LANG_BANNER_NAME, "Nome do Banner");
	//Classified Name
	define(LANG_CLASSIFIED_NAME, "Nome do Classificado");
	//Article Name
	define(LANG_ARTICLE_NAME, "Nome do Artigo");
	//Frequently Asked Questions
	define(LANG_FAQ_NAME, "D�vidas Frequentes");
	//Active
	define(LANG_LABEL_ACTIVE, "Ativo");
	//Suspended
	define(LANG_LABEL_SUSPENDED, "Suspenso");
	//Expired
	define(LANG_LABEL_EXPIRED, "Expirado");
	//Pending
	define(LANG_LABEL_PENDING, "Pendente");
	//Received
	define(LANG_LABEL_RECEIVED, "Recebido");
	//Promotional Code
	define(LANG_LABEL_DISCOUNTCODE, "C�digo Promocional");
	//Account
	define(LANG_LABEL_ACCOUNT, "Conta");
	//Name or Title
	define(LANG_LABEL_NAME_OR_TITLE, "Nome ou T�tulo");
	//Name
	define(LANG_LABEL_NAME, "Nome");
	//Page Name
	define(LANG_LABEL_PAGE_NAME, "Nome da P�gina");
	//Summary Description
	define(LANG_LABEL_SUMMARY_DESCRIPTION, "Resumo");
	//Category
	define(LANG_LABEL_CATEGORY, "Categoria");
	//Category
	define(LANG_CATEGORY, "Categoria");
	//Categories
	define(LANG_LABEL_CATEGORY_PLURAL, "Categorias");
	//Categories
	define(LANG_CATEGORY_PLURAL, "Categorias");
	//Country
	define(LANG_LABEL_COUNTRY, "Pa�s");
	//State
	define(LANG_LABEL_STATE, "Estado");
	//City
	define(LANG_LABEL_CITY, "Cidade");
	//Renewal
	define(LANG_LABEL_RENEWAL, "Renova��o");
	//Renewal Date
	define(LANG_LABEL_RENEWAL_DATE, "Data de Renova��o");
	//Street Address
	define(LANG_LABEL_STREET_ADDRESS, "Endere�o");
	//Web Address
	define(LANG_LABEL_WEB_ADDRESS, "Website");
	//Phone
	define(LANG_LABEL_PHONE, "Fone");
	//Fax
	define(LANG_LABEL_FAX, "Fax");
	//Long Description
	define(LANG_LABEL_LONG_DESCRIPTION, "Descri��o");
	//Status
	define(LANG_LABEL_STATUS, "Status");
	//Level
	define(LANG_LABEL_LEVEL, "N�vel");
	//Empty
	define(LANG_LABEL_EMPTY, "Vazio");
	//Start Date
	define(LANG_LABEL_START_DATE, "Data de In�cio");
	//Start Date
	define(LANG_LABEL_STARTDATE, "Data de In�cio");
	//End Date
	define(LANG_LABEL_END_DATE, "Data de T�rmino");
	//End Date
	define(LANG_LABEL_ENDDATE, "Data de T�rmino");
	//Invalid date
	define(LANG_LABEL_INVALID_DATE, "Data inv�lida");
	//Start Time
	define(LANG_LABEL_START_TIME, "Hora de In�cio");
	//End Time
	define(LANG_LABEL_END_TIME, "Hora de T�rmino");
	//unlimited
	define(LANG_LABEL_UNLIMITED, "ilimitado");
	//Select a Type
	define(LANG_LABEL_SELECT_TYPE, "Selecione um Tipo");
	//Select a Category
	define(LANG_LABEL_SELECT_CATEGORY, "Selecione uma Categoria");
	//No Promotion
	define(LANG_LABEL_NO_PROMOTION, "Sem Promo��es");
	//Select a Promotion
	define(LANG_LABEL_SELECT_PROMOTION, "Selecione uma Promo��o");
	//Contact Name
	define(LANG_LABEL_CONTACTNAME, "Nome do Contato");
	//Contact Name
	define(LANG_LABEL_CONTACT_NAME, "Nome do Contato");
	//Contact Phone
	define(LANG_LABEL_CONTACT_PHONE, "Telefone");
	//Contact Fax
	define(LANG_LABEL_CONTACT_FAX, "Fax");
	//Contact E-mail
	define(LANG_LABEL_CONTACT_EMAIL, "E-mail");
	//URL
	define(LANG_LABEL_URL, "URL");
	//Address
	define(LANG_LABEL_ADDRESS, "Endere�o");
	//E-mail
	define(LANG_LABEL_EMAIL, "E-mail");
	//Invoice
	define(LANG_LABEL_INVOICE, "Fatura");
	//Invoice #
	define(LANG_LABEL_INVOICENUMBER, "Fatura N�");
	//Item
	define(LANG_LABEL_ITEM, "Item");
	//Items
	define(LANG_LABEL_ITEMS, "Itens");
	//Extra Category
	define(LANG_LABEL_EXTRA_CATEGORY, "Categoria Extra");
	//Discount Code
	define(LANG_LABEL_DISCOUNT_CODE, "C�digo Promocional");
	//Amount
	define(LANG_LABEL_AMOUNT, "Total");
	//Make checks payable to
	define(LANG_LABEL_MAKE_CHECKS_PAYABLE, "Fazer os cheques nominais para");
	//Total
	define(LANG_LABEL_TOTAL, "Total");
	//Id
	define(LANG_LABEL_ID, "Id");
	//IP
	define(LANG_LABEL_IP, "IP");
	//Title
	define(LANG_LABEL_TITLE, "T�tulo");
	//Caption
	define(LANG_LABEL_CAPTION, "Legenda");
	//impressions
	define(LANG_IMPRESSIONS, "visualiza��es");
	//Impressions
	define(LANG_LABEL_IMPRESSIONS, "Visualiza��es");
	//Date
	define(LANG_LABEL_DATE, "Data");
	//Your E-mail
	define(LANG_LABEL_YOUREMAIL, "Seu E-mail");
	//Subject
	define(LANG_LABEL_SUBJECT, "Assunto");
	//Additional message
	define(LANG_LABEL_ADDITIONALMSG, "Mensagem adicional");
	//Payment type
	define(LANG_LABEL_PAYMENT_TYPE, "Tipo de pagamento");
	//Notes
	define(LANG_LABEL_NOTES, "Notas");
	//It's easy and fast!
	define(LANG_LABEL_EASYFAST, "� f�cil e r�pido!");
	//Already have access?
	define(LANG_LABEL_ALREADYMEMBER, "J� possui uma conta?");
	//Enjoy our services!
	define(LANG_LABEL_ENJOYSERVICES, "Aproveite nossos servi�os!");
	//Test Password
	define(LANG_LABEL_TESTPASSWORD, "Senha de Teste");
	//Forgot your password?
	define(LANG_LABEL_FORGOTPASSWORD, "Esqueceu sua senha?");
	//Summary
	define(LANG_LABEL_SUMMARY, "Impress�es");
	//Detail
	define(LANG_LABEL_DETAIL, "Detalhes");
	//From
	define(LANG_LABEL_FROM, "De");
	//To
	define(LANG_LABEL_TO, "Para");
	//to
	define(LANG_LABEL_DATE_TO, "a");
	//Last
	define(LANG_LABEL_LAST, "�ltimo");
	//Last
	define(LANG_LABEL_LAST_PLURAL, "�ltimos");
	//day
	define(LANG_LABEL_DAY, "dia");
	//days
	define(LANG_LABEL_DAYS, "dias");
	//New
	define(LANG_LABEL_NEW, "Nova");
	//Type
	define(LANG_LABEL_TYPE, "Tipo");
	//ClickThru
	define(LANG_LABEL_CLICKTHRU, "Website");
	//Added
	define(LANG_LABEL_ADDED, "Adicionado");
	//Add
	define(LANG_LABEL_ADD, "Adicionar");
	//Reviewer
	define(LANG_LABEL_REVIEWER, "Avaliador");
	//System
	define(LANG_LABEL_SYSTEM, "Sistema");
	//Subscribe to RSS
	define(LANG_LABEL_SUBSCRIBERSS, "Inscri��o de RSS");
	//Password strength
	define(LANG_LABEL_PASSWORDSTRENGTH, "For�a da senha");
	//Article Title
	define(LANG_ARTICLE_TITLE, "T�tulo do Artigo");
	//SEO Description
	define(LANG_SEO_DESCRIPTION, "SEO - Descri��o");
	//SEO Keywords
	define(LANG_SEO_KEYWORDS, "SEO - Palavras-chave");
	//Click here to edit the SEO information of this item
	define (LANG_MSG_CLICK_TO_EDIT_SEOCENTER, "Clique aqui para editar as informa��es de SEO deste item");
	//SEO successfully updated!
	define(LANG_MSG_SEOCENTER_ITEMUPDATED, "Informa��es de SEO atualizadas!");
	//Click here to view this article
	define(LANG_MSG_CLICK_TO_VIEW_THIS_ARTICLE, "Clique aqui para visualizar este artigo");
	//Click here to edit this article
	define(LANG_MSG_CLICK_TO_EDIT_THIS_ARTICLE, "Clique aqui para editar este artigo");
	//Click here to add/edit photo gallery for this article
	define(LANG_MSG_CLICK_TO_ADD_EDIT_PHOTO_GALLERY_THIS_ARTICLE, "Clique aqui para adicionar/editar a galeria de fotos deste artigo");
	//Photo gallery not available for this article
	define(LANG_PHOTO_GALLERY_NOT_AVAILABLE_FOR_ARTICLE, "Galeria de fotos indispon�vel para este artigo");
	//Click here to view this article reports
	define(LANG_MSG_CLICK_TO_VIEW_THIS_ARTICLE_REPORTS, "Clique aqui para ver o relat�rio deste artigo");
	//History for this article
	define(LANG_HISTORY_FOR_THIS_ARTICLE, "Hist�rico deste artigo");
	//History not available for this article
	define(LANG_HISTORY_NOT_AVAILABLE_FOR_ARTICLE, "Hist�rico indispon�vel para este artigo");
	//Click here to delete this article
	define(LANG_MSG_CLICK_TO_DELETE_THIS_ARTICLE, "Clique aqui para remover este artigo");
	//Click here to view this banner
	define(LANG_MSG_CLICK_TO_VIEW_THIS_BANNER, "Clique aqui para visualizar este banner");
	//Click here to edit this banner
	define(LANG_MSG_CLICK_TO_EDIT_THIS_BANNER, "Clique aqui para editar este banner");
	//Click here to view this banner reports
	define(LANG_MSG_CLICK_TO_VIEW_THIS_BANNER_REPORTS, "Clique aqui para ver o relat�rio deste banner");
	//History for this banner
	define(LANG_HISTORY_FOR_THIS_BANNER, "Hist�rico deste banner");
	//History not available for this banner
	define(LANG_HISTORY_NOT_AVAILABLE_FOR_BANNER, "Hist�rico indispon�vel para este banner");
	//Click here to delete this banner
	define(LANG_MSG_CLICK_TO_DELETE_THIS_BANNER, "Clique aqui para remover este banner");
	//Classified Title
	define(LANG_CLASSIFIED_TITLE, "T�tulo do Classificado");
	//Click here to
	define(LANG_MSG_CLICKTO, "Clique aqui para");
	//Click here to view this classified
	define(LANG_MSG_CLICK_TO_VIEW_THIS_CLASSIFIED, "Clique aqui para visualizar este classificado");
	//Click here to edit this classified
	define(LANG_MSG_CLICK_TO_EDIT_THIS_CLASSIFIED, "Clique aqui para editar este classificado");
	//Click here to add/edit photo gallery for this classified
	define(LANG_MSG_CLICK_TO_ADD_EDIT_PHOTO_GALLERY_THIS_CLASSIFIED, "Clique aqui para adicionar/editar a galeria de fotos deste classificado");
	//Photo gallery not available for this classified
	define(LANG_PHOTO_GALLERY_NOT_AVAILABLE_FOR_CLASSIFIED, "Galeria de fotos indispon�vel para este classificado");
	//Click here to view this classified reports
	define(LANG_MSG_CLICK_TO_VIEW_THIS_CLASSIFIED_REPORTS, "Clique aqui para ver o relat�rio deste classificado");
	//Click here to map tuning this classified location
	define(LANG_MSG_CLICK_TO_MAP_TUNING_THIS_CLASSIFIED, "Clique aqui para ajustar a localiza��o deste classificado no mapa");
	//Map tuning not available for this classified
	define(LANG_LABEL_MAP_TUNING_NOT_AVAILABLE_FOR_CLASSIFIED, "Ajuste de localiza��o indispon�vel para este classificado");
	//History for this classified
	define(LANG_HISTORY_FOR_THIS_CLASSIFIED, "Hist�rico deste classificado");
	//History not available for this classified
	define(LANG_HISTORY_NOT_AVAILABLE_FOR_CLASSIFIED, "Hist�rico indispon�vel para este classificado");
	//Click here to delete this classified
	define(LANG_MSG_CLICK_TO_DELETE_THIS_CLASSIFIED, "Clique aqui para remover este classificado");
	//Event Title
	define(LANG_EVENT_TITLE, "T�tulo do Evento");
	//Click here to view this event
	define(LANG_MSG_CLICK_TO_VIEW_THIS_EVENT, "Clique aqui para visualizar este evento");
	//Click here to edit this event
	define(LANG_MSG_CLICK_TO_EDIT_THIS_EVENT, "Clique aqui para editar este evento");
	//Click here to add/edit photo gallery for this event
	define(LANG_MSG_CLICK_TO_ADD_EDIT_PHOTO_GALLERY_THIS_EVENT, "Clique aqui para adicionar/editar a galeria de fotos deste evento");
	//Photo gallery not available for this event
	define(LANG_PHOTO_GALLERY_NOT_AVAILABLE_FOR_EVENT, "Galeria de fotos indispon�vel para este evento");
	//Click here to view this event reports
	define(LANG_MSG_CLICK_TO_VIEW_THIS_EVENT_REPORTS, "Clique aqui para ver o relat�rio deste evento");
	//Click here to map tuning this event location
	define(LANG_MSG_CLICK_TO_MAP_TUNING_THIS_EVENT, "Clique aqui para ajustar a localiza��o deste evento no mapa");
	//Map tuning not available for this event
	define(LANG_LABEL_MAP_TUNING_NOT_AVAILABLE_FOR_EVENT, "Ajuste de localiza��o indispon�vel para este evento");
	//History for this event
	define(LANG_HISTORY_FOR_THIS_EVENT, "Hist�rico deste evento");
	//History not available for this event
	define(LANG_HISTORY_NOT_AVAILABLE_FOR_EVENT, "Hist�rico indispon�vel para este evento");
	//Click here to delete this event
	define(LANG_MSG_CLICK_TO_DELETE_THIS_EVENT, "Clique aqui para remover este evento");
	//Gallery Title
	define(LANG_GALLERY_TITLE, "T�tulo da Galeria");
	//Click here to view this gallery
	define(LANG_MSG_CLICK_TO_VIEW_THIS_GALLERY, "Clique aqui para visualizar esta galeria");
	//Click here to edit this gallery
	define(LANG_MSG_CLICK_TO_EDIT_THIS_GALLERY, "Clique aqui para editar esta galeria");
	//Click here to delete this gallery
	define(LANG_MSG_CLICK_TO_DELETE_THIS_GALLERY, "Clique aqui para remover esta galeria");
	//Listing Title
	define(LANG_LISTING_TITLE, "Nome do estabelecimento");
	//Click here to view this listing
	define(LANG_MSG_CLICK_TO_VIEW_THIS_LISTING, "Clique aqui para visualizar este estabelecimento");
	//Click here to edit this listing
	define(LANG_MSG_CLICK_TO_EDIT_THIS_LISTING, "Clique aqui para editar este estabelecimento");
	//Click here to add/edit photo gallery for this listing
	define(LANG_MSG_CLICK_TO_ADD_EDIT_PHOTO_GALLERY_THIS_LISTING, "Clique aqui para adicionar/editar a galeria de fotos deste estabelecimento");
	//Photo gallery not available for this listing
	define(LANG_PHOTO_GALLERY_NOT_AVAILABLE_FOR_LISTING, "Galeria de fotos indispon�vel para este estabelecimento");
	//Click here to change promotion for this listing
	define(LANG_MSG_CLICK_TO_CHANGE_PROMOTION, "Clique aqui para alterar a promo��o deste estabelecimento");
	//Promotion not available for this listing
	define(LANG_MSG_PROMOTION_NOT_AVAILABLE, "Promo��o indispon�vel para este estabelecimento");
	//Click here to view this listing reports
	define(LANG_MSG_CLICK_TO_VIEW_THIS_LISTING_REPORTS, "Clique aqui para ver o relat�rio deste estabelecimento");
	//Click here to map tuning this listing location
	define(LANG_MSG_CLICK_TO_MAP_TUNING_THIS_LISTING, "Clique aqui para ajustar a localiza��o deste estabelecimento no mapa");
	//Map tuning not available for this listing
	define(LANG_LABEL_MAP_TUNING_NOT_AVAILABLE_FOR_LISTING, "Ajuste de localiza��o indispon�vel para este estabelecimento");
	//Click here to view this item reviews
	define(LANG_MSG_CLICK_TO_VIEW_THIS_ITEM_REVIEWS, "Clique aqui para ver as avalia��es deste item");
	//Item reviews not available
	define(LANG_MSG_ITEM_REVIEWS_NOT_AVAILABLE, "Avalia��es indispon�veis para este item");
	//History for this listing
	define(LANG_HISTORY_FOR_THIS_LISTING, "Hist�rico deste estabelecimento");
	//History not available for this listing
	define(LANG_HISTORY_NOT_AVAILABLE_FOR_LISTING, "Hist�rico indispon�vel para este estabelecimento");
	//Click here to delete this listing
	define(LANG_MSG_CLICK_TO_DELETE_THIS_LISTING, "Clique aqui para remover este estabelecimento");
	//Promotion Title
	define(LANG_PROMOTION_TITLE, "T�tulo da Promo��o");
	//Click here to view this promotion
	define(LANG_MSG_CLICK_TO_VIEW_THIS_PROMOTION, "Clique aqui para visualizar esta promo��o");
	//Click here to edit this promotion
	define(LANG_MSG_CLICK_TO_EDIT_THIS_PROMOTION, "Clique aqui editar esta promo��o");
	//Click here to delete this promotion
	define(LANG_MSG_CLICK_TO_DELETE_THIS_PROMOTION, "Clique aqui para remover esta promo��o");
	//Go to "Listings" and click on the promotion icon belonging to the listing where you want to add the promotion. Select one promotion to add to your listing to make it live.
	define(LANG_PROMOTION_EXTRAMESSAGE, "V� para o \"estabelecimentos\" e clique no �cone promo��o do estabelecimento que ter� uma promo��o. Escolha uma promo��o para o estabelecimento. Somente ap�s esse processo a promo��o ser� publicada.");
	//The installments will be recurring until your credit card expiration
	define(LANG_MSG_RECURRINGUNTILCARDEXPIRATION, "As parcelas ser�o debitadas at� a expira��o do cart�o de cr�dito");
	//The installments will be recurring until your credit card expiration ("maximum of 36 installments")
	define(LANG_MSG_RECURRINGUNTILCARDEXPIRATIONMAXOF, "m�ximo de 36 parcelas");
	//SEO Center
	define(LANG_MSG_SEO_CENTER, "Configura��es de SEO");
	//View
	define(LANG_LABEL_VIEW, "Impress�es");
	//Edit
	define(LANG_LABEL_EDIT, "Editar");
	//Gallery
	define(LANG_LABEL_GALLERY, "Galeria");
	//Traffic Reports
	define(LANG_TRAFFIC_REPORTS, "Relat�rio de Tr�fego");
	//Unpaid
	define(LANG_LABEL_UNPAID, "Pendente");
	//Transaction
	define(LANG_LABEL_TRANSACTION, "Transa��o");
	//Delete
	define(LANG_LABEL_DELETE, "Remover");
	//Map Tuning
	define(LANG_LABEL_MAP_TUNING, "Ajustar Localiza��o");
	//SEO
	define(LANG_LABEL_SEO_TUNING, "SEO");
	//Print
	define(LANG_LABEL_PRINT, "Imprimir");
	//Pending Approval
	define(LANG_LABEL_PENDING_APPROVAL, "Aprova��o Pendente");
	//Image
	define(LANG_LABEL_IMAGE, "Imagem");
	//Images
	define(LANG_LABEL_IMAGE_PLURAL, "Imagens");
	//Required field
	define(LANG_LABEL_REQUIRED_FIELD, "Campo obrigat�rio");
	//Account Information
	define(LANG_LABEL_ACCOUNT_INFORMATION, "Informa��es da Conta");
	//Username
	define(LANG_LABEL_USERNAME, "Usu�rio");
	//Current Password
	define(LANG_LABEL_CURRENT_PASSWORD, "Senha Atual");
	//Password
	define(LANG_LABEL_PASSWORD, "Senha");
	//Retype Password
	define(LANG_LABEL_RETYPE_PASSWORD, "Confirme a Senha");
	//Retype Password
	define(LANG_LABEL_RETYPEPASSWORD, "Confirme a Senha");
	//OpenID URL
	define(LANG_LABEL_OPENIDURL, "OpenID URL");
	//Information
	define(LANG_LABEL_INFORMATION, "Informa��es");
	//Publication Date
	define(LANG_LABEL_PUBLICATION_DATE, "Data de Publica��o");
	//Calendar
	define(LANG_LABEL_CALENDAR, "Calend�rio");
	//Friendly Url
	define(LANG_LABEL_FRIENDLY_URL, "Url Amig�vel");
	//For example
	define(LANG_LABEL_FOR_EXAMPLE, "Por exemplo");
	//Image Source
	define(LANG_LABEL_IMAGE_SOURCE, "Arquivo");
	//Image Attribute
	define(LANG_LABEL_IMAGE_ATTRIBUTE, "Autor");
	//Image Caption
	define(LANG_LABEL_IMAGE_CAPTION, "Legenda");
	//Abstract
	define(LANG_LABEL_ABSTRACT, "Resumo");
	//Keywords for the search
	define(LANG_LABEL_KEYWORDS_FOR_SEARCH, "Palavras-chave para a busca");
	//max
	define(LANG_LABEL_MAX, "max");
	//keywords
	define(LANG_LABEL_KEYWORDS, "palavras-chave");
	//Content
	define(LANG_LABEL_CONTENT, "Conte�do do Artigo");
	//Code
	define(LANG_LABEL_CODE, "C�digo");
	//free
	define(LANG_FREE, "gr�tis");
	//free
	define(LANG_LABEL_FREE, "gr�tis");
	//Destination Url
	define(LANG_LABEL_DESTINATION_URL, "Url de Destino");
	//Script
	define(LANG_LABEL_SCRIPT, "Script");
	//File
	define(LANG_LABEL_FILE, "Arquivo");
	//Warning
	define(LANG_LABEL_WARNING, "Aviso");
	//Display URL (optional)
	define(LANG_LABEL_DISPLAY_URL, "Exibir URL (opcional)");
	//Description line 1
	define(LANG_LABEL_DESCRIPTION_LINE1, "Descri��o 1");
	//Description line 2
	define(LANG_LABEL_DESCRIPTION_LINE2, "Descri��o 2");
	//Locations
	define(LANG_LABEL_LOCATIONS, "Localiza��o");
	//Address (optional)
	define(LANG_LABEL_ADDRESS_OPTIONAL, "Complemento");
	//Address (Optional)
	define(LANG_LABEL_ADDRESSOPTIONAL, "Complemento");
	//Detail Description
	define(LANG_LABEL_DETAIL_DESCRIPTION, "Descri��o");
	//Price
	define(LANG_LABEL_PRICE, "Pre�o");
	//Prices
	define(LANG_LABEL_PRICE_PLURAL, "Pre�os");
	//Contact Information
	define(LANG_LABEL_CONTACT_INFORMATION, "Informa��es de Contato");
	//Language
	define(LANG_LABEL_LANGUAGE, "Idioma");
	//Select your main language to contact (when necessary).
	define(LANG_LABEL_LANGUAGETIP, "Selecione seu idioma de origem para contato (quando necess�rio).");
	//First Name
	define(LANG_LABEL_FIRST_NAME, "Nome");
	//First Name
	define(LANG_LABEL_FIRSTNAME, "Nome");
	//Last Name
	define(LANG_LABEL_LAST_NAME, "Sobrenome");
	//Last Name
	define(LANG_LABEL_LASTNAME, "Sobrenome");
	//Company
	define(LANG_LABEL_COMPANY, "estabelecimento");
	//Address Line1
	define(LANG_LABEL_ADDRESS1, "Endere�o");
	//Address Line2
	define(LANG_LABEL_ADDRESS2, "Complemento");
	//Location Name
	define(LANG_LABEL_LOCATION_NAME, "Local");
	//Event Date
	define(LANG_LABEL_EVENT_DATE, "Data do Evento");
	//Description
	define(LANG_LABEL_DESCRIPTION, "Descri��o");
	//Help Information
	define(LANG_LABEL_HELP_INFORMATION, "Informa��es");
	//Text
	define(LANG_LABEL_TEXT, "Texto");
	//Add Image
	define(LANG_LABEL_ADDIMAGE, "Adicionar Imagem");
	//Add Image
	define(LANG_LABEL_ADDIMAGES, "Adicionar Imagem");
	//Edit Image Captions
	define(LANG_LABEL_EDITIMAGECAPTIONS, "Editar Legendas da Imagem");
	//Image File
	define(LANG_LABEL_IMAGEFILE, "Arquivo");
	//Thumb Caption
	define(LANG_LABEL_THUMBCAPTION, "Legenda da Miniatura");
	//Image Caption
	define(LANG_LABEL_IMAGECAPTION, "Legenda da Imagem");
	//Note, your upload may take several minutes depending on the file size and your internet connection speed. Hitting refresh or navigating away from this page will cancel your upload.
	define(LANG_LABEL_NOTEFORGALLERYIMAGE, "Aten��o, seu upload pode demorar alguns minutos dependendo do tamanho de seu arquivo e da velocidade de sua conex�o. Atualizar esta p�gina ou navegar fora desta p�gina cancelar� seu upload.");
	//Video Snippet Code
	define(LANG_LABEL_VIDEO_SNIPPET_CODE, "C�digo do V�deo");
	//Attach Additional File
	define(LANG_LABEL_ATTACH_ADDITIONAL_FILE, "Anexar um Arquivo");
	//Source
	define(LANG_LABEL_SOURCE, "Arquivo");
	//Hours of work
	define(LANG_LABEL_HOURS_OF_WORK, "Hor�rio de funcionamento");
	//Default
	define(LANG_LABEL_DEFAULT, "Padr�o");
	//Payment Method
	define(LANG_LABEL_PAYMENT_METHOD, "M�todo de Pagamento");
	//By Credit Card
	define(LANG_LABEL_BY_CREDIT_CARD, "Por Cart�o de Cr�dito");
	//By PayPal
	define(LANG_LABEL_BY_PAYPAL, "Por Paypal");
	//Print Invoice and Mail a Check
	define(LANG_LABEL_PRINT_INVOICE_AND_MAIL_CHECK, "Imprimir Fatura");
	//Headline
	define(LANG_LABEL_HEADLINE, "T�tulo");
	//Offer
	define(LANG_LABEL_OFFER, "Oferta");
	//Conditions
	define(LANG_LABEL_CONDITIONS, "Condi��es");
	//Promotion Date
	define(LANG_LABEL_PROMOTION_DATE, "Data da Promo��o");
	//Promotion Layout
	define(LANG_LABEL_PROMOTION_LAYOUT, "Layout da Promo��o");
	//Printable Promotion
	define(LANG_LABEL_PRINTABLE_PROMOTION, "Promo��o");
	//Our HTML template based promotion
	define(LANG_LABEL_OUR_HTML_TEMPLATE_BASED, "Nosso modelo padr�o de promo��o");
	//Fill in the fields above and insert a logo or other image (JPG or GIF)
	define(LANG_LABEL_FILL_FIELDS_ABOVE, "Preencha os campos acima e insira uma logomarca ou outra imagem (JPG ou GIF)");
	//A promotion provided by you instead
	define(LANG_LABEL_PROMOTION_PROVIDED_BY_YOU, "Uma promo��o fornecida por voc�");
	//JPG or GIF image
	define(LANG_LABEL_JPG_GIF_IMAGE, "imagem JPG ou GIF");
	//Comment Title
	define(LANG_LABEL_COMMENTTITLE, "T�tulo");
	//Comment
	define(LANG_LABEL_COMMENT, "Coment�rio");
	//Accepted
	define(LANG_LABEL_ACCEPTED, "Aceito");
	//Approved
	define(LANG_LABEL_APPROVED, "Aprovado");
	//Success
	define(LANG_LABEL_SUCCESS, "Sucesso");
	//Completed
	define(LANG_LABEL_COMPLETED, "Finalizado");
	//Y
	define(LANG_LABEL_Y, "S");
	//Failed
	define(LANG_LABEL_FAILED, "Falha");
	//Declined
	define(LANG_LABEL_DECLINED, "Recusado");
	//failure
	define(LANG_LABEL_FAILURE, "falha");
	//Canceled
	define(LANG_LABEL_CANCELED, "Cancelado");
	//Error
	define(LANG_LABEL_ERROR, "Erro");
	//Transaction Code
	define(LANG_LABEL_TRANSACTION_CODE, "C�digo da Transa��o");
	//Subscription ID
	define(LANG_LABEL_SUBSCRIPTION_ID, "ID da Subscri��o");
	//transaction history
	define(LANG_LABEL_TRANSACTION_HISTORY, "hist�rico de transa��es");
	//Authorization Code
	define(LANG_LABEL_AUTHORIZATION_CODE, "C�digo de Autoriza��o");
	//Transaction Status
	define(LANG_LABEL_TRANSACTION_STATUS, "Status da Transa��o");
	//Transaction Error
	define(LANG_LABEL_TRANSACTION_ERROR, "Erro na Transa��o");
	//Monthly Bill Amount
	define(LANG_LABEL_MONTHLY_BILL_AMOUNT, "Valor Mensal da Conta");
	//Transaction OID
	define(LANG_LABEL_TRANSACTION_OID, "ID da Transa��o");
	//Yearly Bill Amount
	define(LANG_LABEL_YEARLY_BILL_AMOUNT, "Valor Anual da Conta");
	//Bill Amount
	define(LANG_LABEL_BILL_AMOUNT, "Valor da Conta");
	//Transaction ID
	define(LANG_LABEL_TRANSACTION_ID, "ID da Transa��o");
	//Receipt ID
	define(LANG_LABEL_RECEIPT_ID, "ID do Recibo");
	//Subscribe ID
	define(LANG_LABEL_SUBSCRIBE_ID, "ID da Subscri��o");
	//Transaction Order ID
	define(LANG_LABEL_TRANSACTION_ORDERID, "ID da Transa�a�");
	//your
	define(LANG_LABEL_YOUR, "seu");
	//Make Your
	define(LANG_LABEL_MAKE_YOUR, "Fa�a Seu");
	//Payment
	define(LANG_LABEL_PAYMENT, "Pagamento");
	//History
	define(LANG_LABEL_HISTORY, "Hist�rico");
	//Login
	define(LANG_LABEL_LOGIN, "Entrar");
	//Transaction canceled
	define(LANG_LABEL_TRANSACTION_CANCELED, "Transa��o cancelada");
	//Transaction amount
	define(LANG_LABEL_TRANSACTION_AMOUNT, "Valor da transa��o");
	//Pay
	define(LANG_LABEL_PAY, "Pagar");
	//Back
	define(LANG_LABEL_BACK, "Voltar");
	//Total Price
	define(LANG_LABEL_TOTAL_PRICE, "Pre�o Total");
	//Pay By Invoice
	define(LANG_LABEL_PAY_BY_INVOICE, "Imprimir Fatura");
	//Administrator
	define(LANG_LABEL_ADMINISTRATOR, "Administrador");
	//Billing Info
	define(LANG_LABEL_BILLING_INFO, "Informa��es do Pagamento");
	//Card Number
	define(LANG_LABEL_CARD_NUMBER, "N�mero do Cart�o");
	//Card Expire date
	define(LANG_LABEL_CARD_EXPIRE_DATE, "Data de Expira��o do Cart�o");
	//Card Code
	define(LANG_LABEL_CARD_CODE, "C�digo do Cart�o");
	//Customer Info
	define(LANG_LABEL_CUSTOMER_INFO, "Informa��es do Cliente");
	//zip
	define(LANG_LABEL_ZIP, "CEP");
	//Place Order and Continue
	define(LANG_LABEL_PLACE_ORDER_CONTINUE, "Concluir e Continuar");
	//General Information
	define(LANG_LABEL_GENERAL_INFORMATION, "Informa��es Gerais");
	//Phone Number
	define(LANG_LABEL_PHONE_NUMBER, "Fone");
	//E-mail Address
	define(LANG_LABEL_EMAIL_ADDRESS, "Endere�o de E-mail");
	//Credit Card Information
	define(LANG_LABEL_CREDIT_CARD_INFORMATION, "Informa��es do Cart�o de Cr�dito");
	//Exp. Date
	define(LANG_LABEL_EXP_DATE, "Data de Exp.");
	//Customer Information
	define(LANG_LABEL_CUSTOMER_INFORMATION, "Informa��es do Cliente");
	//Card Expiration
	define(LANG_LABEL_CARD_EXPIRATION, "Expira��o do Cart�o");
	//Name on Card
	define(LANG_LABEL_NAME_ON_CARD, "Nome Impresso no Cart�o");
	//Card Type
	define(LANG_LABEL_CARD_TYPE, "Tipo de Cart�o");
	//Card Verification Number
	define(LANG_LABEL_CARD_VERIFICATION_NUMBER, "N�mero de Verifica��o do Cart�o");
	//Province
	define(LANG_LABEL_PROVINCE, "Estado");
	//Postal Code
	define(LANG_LABEL_POSTAL_CODE, "CEP");
	//Post Code
	define(LANG_LABEL_POST_CODE, "CEP");
	//Tel
	define(LANG_LABEL_TEL, "Fone");
	//Select Date
	define(LANG_LABEL_SELECTDATE, "Selecione uma Data");
	//Found
	define(LANG_PAGING_FOUND, "Foi encontrado");
	//Found
	define(LANG_PAGING_FOUND_PLURAL, "Foram encontrados");
	//record
	define(LANG_PAGING_RECORD, "resultado para sua busca");
	//records
	define(LANG_PAGING_RECORD_PLURAL, "resultados para sua busca");
	//Showing page
	define(LANG_PAGING_SHOWINGPAGE, "Mostrando p�gina");
	//of
	define(LANG_PAGING_PAGEOF, "de");
	//pages
	define(LANG_PAGING_PAGE_PLURAL, "p�ginas");
	//Go to page:
	define(LANG_PAGING_GOTOPAGE, "Ir para p�gina:");
	//previous page
	define(LANG_PAGING_PREVIOUSPAGE, "p�gina anterior");
	//next page
	define(LANG_PAGING_NEXTPAGE, "pr�xima p�gina");
	//"previous" page
	define(LANG_PAGING_PREVIOUSPAGEMOBILE, "anterior");
	//"next" page
	define(LANG_PAGING_NEXTPAGEMOBILE, "pr�xima");
	//Article successfully added!
	define(LANG_MSG_ARTICLE_SUCCESSFULLY_ADDED, "Artigo adicionado com sucesso!");
	//Banner successfully added!
	define(LANG_MSG_BANNER_SUCCESSFULLY_ADDED, "Banner adicionado com sucesso! Para ativar seu banner � necess�rio efetuar o pagamento.");
	//Classified successfully added!
	define(LANG_MSG_CLASSIFIED_SUCCESSFULLY_ADDED, "Classificado adicionado com sucesso!");
	//Event successfully added!
	define(LANG_MSG_EVENT_SUCCESSFULLY_ADDED, "Evento adicionado com sucesso!");
	//Gallery successfully added!
	define(LANG_MSG_GALLERY_SUCCESSFULLY_ADDED, "Galeria adicionada com sucesso!");
	//Listing successfully added!
	define(LANG_MSG_LISTING_SUCCESSFULLY_ADDED, "estabelecimento adicionada com sucesso!");
	//Promotion successfully added!
	define(LANG_MSG_PROMOTION_SUCCESSFULLY_ADDED, "Promo��o adicionada com sucesso!");
	//Article successfully updated!
	define(LANG_MSG_ARTICLE_SUCCESSFULLY_UPDATED, "Artigo atualizado com sucesso!");
	//Banner successfully updated!
	define(LANG_MSG_BANNER_SUCCESSFULLY_UPDATED, "Banner atualizado com sucesso!");
	//Classified successfully updated!
	define(LANG_MSG_CLASSIFIED_SUCCESSFULLY_UPDATED, "Classificado atualizado com sucesso!");
	//Event successfully updated!
	define(LANG_MSG_EVENT_SUCCESSFULLY_UPDATED, "Evento atualizado com sucesso!");
	//Gallery successfully updated!
	define(LANG_MSG_GALLERY_SUCCESSFULLY_UPDATED, "Galeria atualizada com sucesso!");
	//Listing successfully updated!
	define(LANG_MSG_LISTING_SUCCESSFULLY_UPDATED, "estabelecimento atualizada com sucesso!");
	//Promotion successfully updated!
	define(LANG_MSG_PROMOTION_SUCCESSFULLY_UPDATED, "Promo��o atualizada com sucesso!");
	//Map Tuning successfully updated!
	define(LANG_MSG_MAPTUNING_SUCCESSFULLY_UPDATED, "Ajuste de Localiza��o atualizado com sucesso!");
	//Gallery successfully changed!
	define(LANG_MSG_GALLERY_SUCCESSFULLY_CHANGED, "Galeria alterada com sucesso!");
	//Promotion successfully changed!
	define(LANG_MSG_PROMOTION_SUCCESSFULLY_CHANGED, "Promo��o alterada com sucesso!");
	//Banner successfully deleted!
	define(LANG_MSG_BANNER_SUCCESSFULLY_DELETED, "Banner removido com sucesso!");
	//Invalid image type. Please insert one image JPG or GIF
	define(LANG_MSG_INVALID_IMAGE_TYPE, "Tipo de imagem inv�lido. Por favor, insira uma imagem JPG ou GIF");
	//Attached file was denied. Invalid file type.
	define(LANG_MSG_ATTACHED_FILE_DENIED, "Arquivo anexado negado. Tipo de arquivo inv�lido.");
	//Click here to view this gallery
	define(LANG_MSG_CLICK_TO_VIEW_GALLERY, "clique aqui para visualizar esta galeria");
	//Click here to manage this gallery images
	define(LANG_MSG_CLICKTOMANAGEGALLERYIMAGES, "Clique aqui para gerenciar as imagens desta galeria");
	//Please type your username.
	define(LANG_MSG_TYPE_USERNAME, "Por favor, digite seu usu�rio.");
	//Username was not found.
	define(LANG_MSG_USERNAME_WAS_NOT_FOUND, "Usu�rio n�o encontrado.");
	//Please try again or contact support at:
	define(LANG_MSG_TRY_AGAIN_OR_CONTACT_SUPPORT, "Por favor, tente novamente ou entre em contato com o suporte:");
	//System Forgotten Password is disabled.
	define(LANG_MSG_FORGOTTEN_PASSWORD_DISABLED, "Sistema de Recupera��o de Senha est� desabilitado.");
	//Please contact support at:
	define(LANG_MSG_CONTACT_SUPPORT, "Por favor, entre em contato com o suporte:");
	//Thank you!
	define(LANG_MSG_THANK_YOU, "Obrigado!");
	//An e-mail was sent to the account holder with instructions to obtain a new password
	define(LANG_MSG_EMAIL_WAS_SENT_TO_ACCOUNT_HOLDER, "Um e-mail foi enviado para o propriet�rio da conta com instru��es para obter uma nova senha");
	//File not found!
	define(LANG_MSG_FILE_NOT_FOUND, "Arquivo n�o encontrado!");
	//Error! No Thumb Image!
	define(LANG_MSG_ERRORNOTHUMBIMAGE, "Erro! Sem Imagem!");
	//No Images have been uploaded into this gallery yet!
	define(LANG_MSG_NOIMAGESUPLOADEDYET, "Nenhuma Imagem foi adicionada a esta galeria ainda!");
	//Click here to print the invoice
	define(LANG_MSG_CLICK_TO_PRINT_INVOICE, "Clique aqui para imprimir a fatura");
	//Click here to view the invoice detail
	define(LANG_MSG_CLICK_TO_VIEW_INVOICE_DETAIL, "Clique aqui para ver os detalhes da fatura");
	//(prices amount are per installments)
	define(LANG_MSG_PRICES_AMOUNT_PER_INSTALLMENTS, "(o pre�o total � por presta��es)");
	//Unpaid Item
	define(LANG_MSG_UNPAID_ITEM, "Item Pendente");
	//No Check Out Needed
	define(LANG_MSG_NO_CHECKOUT_NEEDED, "Nenhum pagamento necess�rio");
	//(Move the mouse over the bars to see more details about the graphic)
	define(LANG_MSG_MOVE_MOUSEOVER_THE_BARS, "(Coloque o mouse sobre as barras para ver mais detalhes sobre o gr�fico)");
	//(Click the report type to display graph)
	define(LANG_MSG_CLICK_REPORT_TYPE, "(Clique no tipo de relat�rio para exibir o gr�fico)");
	//Click here to view this review
	define(LANG_MSG_CLICK_TO_VIEW_THIS_REVIEW, "Clique aqui para visualizar esta avalia��o");
	//Click here to edit this review
	define(LANG_MSG_CLICK_TO_EDIT_THIS_REVIEW, "Clique aqui para editar esta avalia��o");
	//Click here to delete this review
	define(LANG_MSG_CLICK_TO_DELETE_THIS_REVIEW, "Clique aqui para remover esta avalia��o");
	//Waiting Site Manager approve
	define(LANG_MSG_WAITINGSITEMGRAPPROVE, "Esperando aprova��o do Administrador");
	//Review already approved
	define(LANG_MSG_REVIEW_ALREADY_APPROVED, "Avalia��o j� aprovada");
	//Reply
	define(LANG_REPLY, "Responder");
	//Response already approved
	define(LANG_MSG_RESPONSE_ALREADY_APPROVED, "Resposta j� aprovada");
	//Reply successfully sent!
	define(LANG_REPLY_SUCCESSFULLY, "Resposta enviada com sucesso!");
	//Please type a valid reply!
	define(LANG_REPLY_EMPTY, "Por favor, escreva uma resposta v�lida!");
	//Click here to reply this review
	define(LANG_MSG_REVIEW_REPLY, "Clique aqui para responder esta avalia��o");
	//Click here to view the transaction
	define(LANG_MSG_CLICK_TO_VIEW_TRANSACTION, "Clique aqui para ver a transa��o");
	//Username must be between
	define(LANG_MSG_USERNAME_MUST_BE_BETWEEN, "Usu�rio deve ter entre");
	//characters with no spaces.
	define(LANG_MSG_CHARACTERS_WITH_NO_SPACES, "caracteres sem espa�os.");
	//Password must be between
	define(LANG_MSG_PASSWORD_MUST_BE_BETWEEN, "A senha deve ter entre");
	//Type you password here if you want to change it.
	define(LANG_MSG_TIPE_YOUR_PASSWORD_HERE_IF_YOU_WANT_TO_CHANGE_IT, "Digite sua senha se voc� deseja altera-la.");
	//Password is going to be sent to Member E-mail Address.
	define(LANG_MSG_PASSWORD_SENT_TO_MEMBER_EMAIL, "A senha ser� enviada para o E-mail do S�cio.");
	//Please write down your username and password for future reference.
	define(LANG_MSG_WRITE_DOWN_YOUR_USERNAME_PASSWORD, "Por favor, anote o seu usu�rio e senha para futura refer�ncia.");
	//I agree with the terms of use
	define(LANG_MSG_AGREE_WITH_TERMS_OF_USE, "Eu concordo com os termos de uso");
	//successfully added
	define(LANG_MSG_CATEGORY_SUCCESSFULLY_ADDED, "adicionada com sucesso!");
	//This category was already inserted
	define(LANG_MSG_CATEGORY_ALREADY_INSERTED, "Esta categoria j� foi adicionada");
	//Please, select a valid category
	define(LANG_MSG_SELECT_VALID_CATEGORY, "Por favor, selecione uma categoria v�lida");
	//Please, select a category first
	define(LANG_MSG_SELECT_CATEGORY_FIRST, "Por favor, selecione uma categoria primeiro");
	//You can choose a page name title to be accessed directly from the web browser as a static html page. The chosen page name title must contain only alphanumeric chars (like "a-z" and/or "0-9") and "-" instead of spaces.
	define(LANG_MSG_FRIENDLY_URL1, "Voc� pode escolher um nome para a p�gina ser acessada diretamente do navegador como uma p�gina HTML est�tica. O nome escolhido para a p�gina deve conter somente caracteres alfanum�ricos (como \"a-z\" e/ou \"0-9\") e \"-\" ao inv�s de espa�os.");
	//The page name title "John Auto Repair" will be available through the url:
	define(LANG_MSG_FRIENDLY_URL2, "O nome \"John Auto Repair\" estar� dispon�vel atrav�s da url:");
	//"Additional images may be added to the" [GALLERYIMAGE] gallery (If it is enabled).
	define(LANG_MSG_ADDITIONAL_IMAGES_MAY_BE_ADDED, "Imagens adicionais podem ser inseridas na");
	//Additional images may be added to the [GALLERYIMAGE] "gallery (If it is enabled)."
	define(LANG_MSG_ADDITIONAL_IMAGES_IF_ENABLED, "galeria de fotos (Se estiver habilitada).");
	//Max file size
	define(LANG_MSG_MAX_FILE_SIZE, "Tamanho m�ximo do arquivo");
	//Transparent .gif not supported
	define(LANG_MSG_TRANSPARENTGIF_NOT_SUPPORTED, "Imagens .gif transparentes n�o s�o suportadas");
	//Check this box to remove your existing image
	define(LANG_MSG_CHECK_TO_REMOVE_IMAGE, "Marque esta caixa para remover a imagem existente");
	//max 250 characters
	define(LANG_MSG_MAX_250_CHARS, "max 250 caracteres");
	//characters left
	define(LANG_MSG_CHARS_LEFT, "caracteres restantes");
	//(including spaces and line breaks)
	define(LANG_MSG_INCLUDING_SPACES_LINE_BREAKS, "(incluindo espa�os e quebras de linha)");
	//Include up to
	define(LANG_MSG_INCLUDE_UP_TO_KEYWORDS, "Adicione at�");
	//keywords with a maximum of 50 characters each.
	define(LANG_MSG_KEYWORDS_WITH_MAXIMUM_50, "palavras-chave com no m�ximo 50 caracteres cada.");
	//Add one keyword or keyword phrase per line. For example:
	define(LANG_MSG_KEYWORD_PER_LINE, "Adicionar uma palavra-chave ou frase por linha. Por exemplo:");
	//Only select sub-categories that directly apply to your type.
	define(LANG_MSG_ONLY_SELECT_SUBCATEGS, "Selecione somente subcategorias que se enquadram diretamente em seu estabelecimento.");
	//Your article will automatically appear in the main category of each sub-category you select.
	define(LANG_MSG_ARTICLE_AUTOMATICALLY_APPEAR, "Seu artigo aparecer� automaticamente na categoria principal de cada subcategoria que voc� selecionar.");
	//max 25 characters
	define(LANG_MSG_MAX_25_CHARS, "max 25 caracteres");
	//max 500 characters
	define(LANG_MSG_MAX_500_CHARS, "max 500 caracteres");
	//Allowed file types
	define(LANG_MSG_ALLOWED_FILE_TYPES, "Tipos de arquivo permitidos");
	//Click here to preview this listing
	define(LANG_MSG_CLICK_TO_PREVIEW_THIS_LISTING, "Clique aqui para visualizar este estabelecimento");
	//Click here to preview this event
	define(LANG_MSG_CLICK_TO_PREVIEW_THIS_EVENT, "Clique aqui para visualizar este evento");
	//Click here to preview this classified
	define(LANG_MSG_CLICK_TO_PREVIEW_THIS_CLASSIFIED, "Clique aqui para visualizar este classificado");
	//Click here to preview this article
	define(LANG_MSG_CLICK_TO_PREVIEW_THIS_ARTICLE, "Clique aqui para visualizar este artigo");
	//Click here to preview this banner
	define(LANG_MSG_CLICK_TO_PREVIEW_THIS_BANNER, "Clique aqui para visualizar este banner");
	//Click here to preview this promotion
	define(LANG_MSG_CLICK_TO_PREVIEW_THIS_PROMOTION, "Clique aqui para visualizar esta promo��o");
	//Click here to preview this gallery
	define(LANG_MSG_CLICK_TO_PREVIEW_THIS_GALLERY, "Clique aqui para visualizar esta galeria");
	//max 30 characters
	define(LANG_MSG_MAX_30_CHARS, "max 30 caracteres");
	//Select a Country
	define(LANG_MSG_SELECT_A_COUNTRY, "Selecione um Pa�s");
	//Select a State
	define(LANG_MSG_SELECT_A_STATE, "Selecione um Estado");
	//Select a City
	define(LANG_MSG_SELECT_A_CITY, "Selecione uma Cidade");
	//(This information will not be displayed publicly)
	define(LANG_MSG_INFO_NOT_DISPLAYED, "(Estas informa��es n�o ser�o divulgadas)");
	//Your event will automatically appear in the main category of each sub-category you select.
	define(LANG_MSG_EVENT_AUTOMATICALLY_APPEAR, "Seu evento aparecer� automaticamente na categoria principal de cada subcategoria que voc� selecionar");
	//Please select a state first
	define(LANG_MSG_SELECT_STATE_FIRST, "Selecione uma cidade primeiro");
	//Click here if you do not see your city.
	define(LANG_MSG_CLICK_TO_SEE_YOUR_CITY, "Clique aqui se voc� n�o encontrou sua cidade.");
	//If video snippet code was filled in, it will appear on the detail page
	define(LANG_MSG_VIDEO_SNIPPET_CODE, "Se o c�digo do v�deo for preenchido, ele aparecer� na p�gina de detalhe");
	//Max video code size supported
	define(LANG_MSG_MAX_VIDEO_CODE_SIZE, "Tamanho m�ximo suportado do c�digo do v�deo");
	//If the video code size is bigger than supported video size, it will be modified.
	define(LANG_MSG_VIDEO_MODIFIED, "Se o tamanho do c�digo do v�deo for maior que o suportado, ele ser� modificado.");
	//Attachment has no caption
	define(LANG_MSG_ATTACHMENT_HAS_NO_CAPTION, "Anexo n�o tem legenda");
	//Check this box to remove existing listing attachment
	define(LANG_MSG_CLICK_TO_REMOVE_ATTACHMENT, "Marque esta caixa para remover o anexo existente");
	//Add one phrase per line. For example
	define(LANG_MSG_PHRASE_PER_LINE, "Adicionar uma frase por linha. Por exemplo");
	//Extra categories/sub-categories cost an
	define(LANG_MSG_EXTRA_CATEGORIES_COST, "Categorias/subcategorias extras ter�o um custo");
	//additional
	define(LANG_MSG_ADDITIONAL, "adicional de");
	//each. Be seen!
	define(LANG_MSG_BE_SEEN, "cada. Seja visto!");
	//Your listing will automatically appear in the main category of each sub-category you select.
	define(LANG_MSG_LISTING_AUTOMATICALLY_APPEAR, "Seu estabelecimento aparecer� automaticamente na categoria principal de cada subcategoria que voc� selecionar.");
	//Request your listing to be considered for the following designations.
	define(LANG_MSG_REQUEST_YOUR_LISTING, "Solicite que seu estabelecimento seja inserida nas classifica��es seguintes.");
	//Click here to select date
	define(LANG_MSG_CLICK_TO_SELECT_DATE, "Clique aqui para selecionar uma data");
	//"Click on the" gallery icon below if you wish to add photos to your photo gallery.
	define(LANG_LISTING_CLICK_GALLERY_BELOW, "Clique no");
	//Click on the "gallery icon" below if you wish to add photos to your photo gallery.
	define(LANG_LISTING_GALLERY_ICON, "�cone da galeria");
	//Click on the gallery icon "below if you wish to add photos to your photo gallery."
	define(LANG_LISTING_IFYOUWISHADDPHOTOS, "abaixo se voc� deseja adicionar fotos � sua galeria.");
	//You can add promotion to your listing by clicking on the link
	define(LANG_LISTING_YOUCANADDPROMOTION, "Voc� pode adicionar promo��o � seu estabelecimento clicando no link");
	//add promotion
	define(LANG_LISTING_ADDPROMOTION, "adicionar promo��o");
	//All pages but item pages
	define(LANG_ALLPAGESBUTITEMPAGES, "Todas as p�ginas exceto as p�ginas dos items");
	//Non-category search
	define(LANG_NONCATEGORYSEARCH, "Busca sem categoria");
	//promotion
	define(LANG_ICONPROMOTION, "promo��o");
	//e-mail to friend
	define(LANG_ICONEMAILTOFRIEND, "convide um(a) amigo(a)");
	//add to quick list
	define(LANG_ICONQUICKLIST_ADD, "+ favoritos");
	//print
	define(LANG_ICONPRINT, "imprimir");
	//map
	define(LANG_ICONMAP, "mapa");
	//Add to
	define(LANG_ADDTO_SOCIALBOOKMARKING, "Adicionar ao");
	//Google maps are not available. Please contact the administrator.
	define(LANG_GOOGLEMAPS_NOTAVAILABLE_CONTACTADM, "Google maps n�o est� dispon�vel. Entre em contato com o administrador.");
	//Remove
	define(LANG_QUICKLIST_REMOVE, "Remover");
	//Favorite Articles
	define(LANG_FAVORITE_ARTICLE, "Artigos Favoritos");
	//Favorite Classifieds
	define(LANG_FAVORITE_CLASSIFIED, "Classificados Favoritos");
	//Favorite Events
	define(LANG_FAVORITE_EVENT, "Eventos Favoritos");
	//Favorite Listings
	define(LANG_FAVORITE_LISTING, "estabelecimentos Favoritas");
	//Favorite Promotions
	define(LANG_FAVORITE_PROMOTION, "Promo��es Favoritas");
	//Published
	define(LANG_ARTICLE_PUBLISHED, "Publicado em");
	//More Info
	define(LANG_CLASSIFIED_MOREINFO, "Mais Informa��es");
	//Date
	define(LANG_EVENT_DATE, "Data");
	//Time
	define(LANG_EVENT_TIME, "Hora");
	//Get driving directions
	define(LANG_EVENT_DRIVINGDIRECTIONS, "Como chegar");
	//Website
	define(LANG_EVENT_WEBSITE, "Website");
	//t
	define(LANG_EVENT_LETTERPHONE, "t");
	//More
	define(LANG_EVENT_MORE, "Mais");
	//More Info
	define(LANG_EVENT_MOREINFO, "Mais Informa��es");
	//View all categories
	define(LANG_LISTING_VIEWALLCATEGORIES, "Ver todas as categorias");
	//More Info
	define(LANG_LISTING_MOREINFO, "Mais Informa��es");
	//view phone
	define(LANG_LISTING_VIEWPHONE, "ver fone");
	//view fax
	define(LANG_LISTING_VIEWFAX, "ver fax");
	//Click here to see more info!
	define(LANG_LISTING_ATTACHMENT, "Clique aqui para ver mais informa��es!"); 
	//Complete the form below to contact us.
	define(LANG_LISTING_CONTACTTITLE, "Envie Uma Mensagem");
	//t
	define(LANG_LISTING_LETTERPHONE, "t");
	//f
	define(LANG_LISTING_LETTERFAX, "f");
	//w
	define(LANG_LISTING_LETTERWEBSITE, "w");
	//e
	define(LANG_LISTING_LETTEREMAIL, "e");
	//offers the following products and/or services:
	define(LANG_LISTING_OFFERS, "oferece os seguintes produtos e/ou servi�os:");
	//Hours of work
	define(LANG_LISTING_HOURS_OF_WORK, "Hor�rio de funcionamento");
	//No review comment found for this item!
	define(LANG_REVIEW_NORECORD,"Nenhuma avalia��o encontrada para este item!");
	//Review
	define(LANG_REVIEW, "Avalia��o");
	//Reviews
	define(LANG_REVIEW_PLURAL, "Avalia��es");
	//Reviews
	define(LANG_REVIEWTITLE, "Avalia��es");
	//review
	define(LANG_REVIEWCOUNT, "avalia��o");
	//reviews
	define(LANG_REVIEWCOUNT_PLURAL, "avalia��es");
	//Related Categories
	define(LANG_RELATEDCATEGORIES, "Categorias Relacionadas");
	//Subcategories
	define(LANG_LISTING_SUBCATEGORIES, "Subcategorias");
	//See comments
	define(LANG_REVIEWSEECOMMENTS, "Ver avalia��es");
	//Rate it!
	define(LANG_REVIEWRATEIT, "D� sua nota!");
	//Be the first to review this item!
	define(LANG_REVIEWBETHEFIRST, "Seja o primeiro a avaliar!");
	//Offered by
	define(LANG_PROMOTION_OFFEREDBY, "Oferecido por");
	//More Info
	define(LANG_PROMOTION_MOREINFO, "Mais Informa��es");
	//Valid from
	define(LANG_PROMOTION_VALIDFROM, "V�lido de");
	//to
	define(LANG_PROMOTION_VALIDTO, "at�");
	//Print Promotion
	define(LANG_PROMOTION_PRINT, "Imprimir");
	//Article
	define(LANG_ARTICLE_FEATURE_NAME, "Artigo");
	//Articles
	define(LANG_ARTICLE_FEATURE_NAME_PLURAL, "Artigos");
	//Banner
	define(LANG_BANNER_FEATURE_NAME, "Banner");
	//Banners
	define(LANG_BANNER_FEATURE_NAME_PLURAL, "Banners");
	//Classified
	define(LANG_CLASSIFIED_FEATURE_NAME, "Classificado");
	//Classifieds
	define(LANG_CLASSIFIED_FEATURE_NAME_PLURAL, "Classificados");
	//Event
	define(LANG_EVENT_FEATURE_NAME, "Evento");
	//Events
	define(LANG_EVENT_FEATURE_NAME_PLURAL, "Eventos");
	//Listing
	define(LANG_LISTING_FEATURE_NAME, "estabelecimento");
	//Listings
	define(LANG_LISTING_FEATURE_NAME_PLURAL, "estabelecimentos");
	//Promotion
	define(LANG_PROMOTION_FEATURE_NAME, "Promo��o");
	//Promotions
	define(LANG_PROMOTION_FEATURE_NAME_PLURAL, "Promo��es");
	//Send
	define(LANG_BUTTON_SEND, "Enviar");
	//Sign Up
	define(LANG_BUTTON_SIGNUP, "Cadastre-se");
	//View Category Path
	define(LANG_BUTTON_VIEWCATEGORYPATH, "Ver o Caminho da Categoria");
	//Remove Selected Category
	define(LANG_BUTTON_REMOVESELECTEDCATEGORY, "Remover a Categoria");
	//Continue
	define(LANG_BUTTON_CONTINUE, "Avan�ar");
	//Cancel
	define(LANG_BUTTON_CANCEL, "Cancelar");
	//Log In
	define(LANG_BUTTON_LOGIN, "Entrar");
	//Save Map Tuning
	define(LANG_BUTTON_SAVE_MAP_TUNING, "Salvar ajuste");
	//Clear Map Tuning
	define(LANG_BUTTON_CLEAR_MAP_TUNING, "Limpar ajuste");
	//Next
	define(LANG_BUTTON_NEXT, "Pr�ximo");
	//Pay By CreditCard
	define(LANG_BUTTON_PAY_BY_CREDIT_CARD, "Pagar por Cart�o de Cr�dito");
	//Pay By PayPal
	define(LANG_BUTTON_PAY_BY_PAYPAL, "Pagar por PayPal");
	//Search
	define(LANG_BUTTON_SEARCH, "Buscar");
	//Advanced Search
	define(LANG_BUTTON_ADVANCEDSEARCH, "Busca Avan�ada");
	//Clear
	define(LANG_BUTTON_CLEAR, "Limpar");
	//Add your Article
	define(LANG_BUTTON_ADDARTICLE, "Adicione seu Artigo");
	//Add your Classified
	define(LANG_BUTTON_ADDCLASSIFIED, "Adicione seu Classificado");
	//Add your Event
	define(LANG_BUTTON_ADDEVENT, "Adicione seu Evento");
	//Add your Listing
	define(LANG_BUTTON_ADDLISTING, "Adicione seu estabelecimento");
	//Add your Promotion
	define(LANG_BUTTON_ADDPROMOTION, "Adicione sua Promo��o");
	//Home
	define(LANG_BUTTON_HOME, "Home");
	//Manage Account
	define(LANG_BUTTON_MANAGE_ACCOUNT, "Gerenciar Conta");
	//Help
	define(LANG_BUTTON_HELP, "Ajuda");
	//Logout
	define(LANG_BUTTON_LOGOUT, "Sair");
	//Submit
	define(LANG_BUTTON_SUBMIT, "Enviar");
	//Update
	define(LANG_BUTTON_UPDATE, "Atualizar");
	//Back
	define(LANG_BUTTON_BACK, "Voltar");
	//Delete
	define(LANG_BUTTON_DELETE, "Remover");
	//Complete the Process
	define(LANG_BUTTON_COMPLETE_THE_PROCESS, "Completar o Processo");
	//Please enter the text you see in the image at the left into the textbox. This is required to prevent automated submission of contact requests.
	define(LANG_CAPTCHA_HELP, "Por favor, digite o c�digo que est� na imagem. Este campo � obrigat�rio para evitar o envio autom�tico de e-mails.");
	//Verification Code image cannot be displayed
	define(LANG_CAPTCHA_ALT, "C�digo de Verifica��o n�o p�de ser mostrado");
	//Verification Code
	define(LANG_CAPTCHA_TITLE, "C�digo de Verifica��o");
	//Please select a rating for this item
	define(LANG_MSG_REVIEW_SELECTRATING, "Por favor, selecione uma nota para este item");
	//Fraud detected! Please select a rating for this item!
	define(LANG_MSG_REVIEW_FRAUD_SELECTRATING, "Fraude detectada! Por favor, selecione uma nota para este item!");
	//"Comment" and "Comment Title" are required to post a comment!
	define(LANG_MSG_REVIEW_COMMENTREQUIRED, "\"Coment�rio\" e \"T�tulo\" s�o obrigat�rios para enviar um coment�rio!");
	//"Name" and "E-mail" are required to post a comment!
	define(LANG_MSG_REVIEW_NAMEEMAILREQUIRED, "\"Nome\" e \"E-mail\" s�o obrigat�rios para enviar um coment�rio!");
	//Please type a valid e-mail address!
	define(LANG_MSG_REVIEW_TYPEVALIDEMAIL, "Por favor, digite um e-mail v�lido!");
	//You have already given your opinion on this item. Thank you.
	define(LANG_MSG_REVIEW_YOUALREADYGIVENOPINION, "Voc� j� deu sua opni�o para este item. Obrigado.");
	//Thanks for the feedback!
	define(LANG_MSG_REVIEW_THANKSFEEDBACK, "Obrigado!");
	//Your review has been submitted for approval.
	define(LANG_MSG_REVIEW_REVIEWSUBMITTEDAPPROVAL, "Sua avalia��o foi enviada para aprova��o.");
	//No payment method was selected!
	define(LANG_MSG_NO_PAYMENT_METHOD_SELECTED, "Nenhum m�todo de pagamento foi selecionado!");
	//Wrong credit card expiration date. Please, try again.
	define(LANG_MSG_WRONG_CARD_EXPIRATION_TRY_AGAIN, "Data de expira��o do cart�o errada. Por favor, tente novamente.");
	//Click here to try again
	define(LANG_MSG_CLICK_HERE_TO_TRY_AGAIN, "Clique aqui para tentar novamente");
	//Payment transactions may not occur immediately.
	define(LANG_MSG_TRANSACTIONS_MAY_NOT_OCCUR_IMMEDIATELY, "As transa��es podem n�o ocorrer imediatamente.");
	//After your payment is processed, information about your transaction
	define(LANG_MSG_AFTER_PAYMENT_IS_PROCESSED_INFO_ABOUT, "Depois que seu pagamento for processado, informa��es sobre sua transa��o");
	//may be found in your transaction history.
	define(LANG_MSG_MAY_BE_FOUND_IN_TRANSACTION_HISTORY, "podem ser encontradas em seu hist�rico de transa��es.");
	//"may be found in your" transaction history
	define(LANG_MSG_MAY_BE_FOUND_IN_YOUR, "podem ser encontradas em");
	//The payment gateway is not available currently
	define(LANG_MSG_PAYMENT_GATEWAY_NOT_AVAILABLE, "O sistema de pagamento n�o est� dispon�vel no momento");
	//The payment parameters could not be validated
	define(LANG_MSG_PAYMENT_INVALID_PARAMS, "Os par�metros de pagamento n�o puderam ser validados");
	//Internal gateway error was encountered
	define(LANG_MSG_INTERNAL_GATEWAY_ERROR, "Foi encontrado um erro interno no pagamento");
	//Information about your transaction may be found
	define(LANG_MSG_INFO_ABOUT_TRANSACTION_MAY_BE_FOUND, "Informa��es sobre sua transa��o podem ser encontradas");
	//in your transaction history.
	define(LANG_MSG_IN_YOUR_TRANSACTION_HISTORY, "em seu hist�rico de transa��o.");
	//in your
	define(LANG_MSG_IN_YOUR, "em seu");
	//No Transaction ID
	define(LANG_MSG_NO_TRANSACTION_ID, "N�o h� ID da Transa��o");
	//System failure, please try again.
	define(LANG_MSG_SYSTEM_FAILURE_TRY_AGAIN, "Falha no sistema, por favor, tente novamente.");
	//Please, fill in all required fields.
	define(LANG_MSG_FILL_ALL_REQUIRED_FIELDS, "Por favor, preencha todos os campos obrigat�rios.");
	//Could not connect.
	define(LANG_MSG_COULD_NOT_CONNECT, "N�o foi poss�vel conectar.");
	//Thank you for setting up your items and for making the payment!
	define(LANG_MSG_THANKS_FOR_MAKING_THE_PAYMENT, "Obrigado por adicionar seus itens e fazer o pagamento!");
	//Site manager will review your items and set it live within 2 working days.
	define(LANG_MSG_SITEMGR_WILL_REVIEW_YOUR_ITEMS, "O administrador revisar� seus itens e os colocar� no ar dentro 2 dias �teis.");
	//The payment gateway could not respond
	define(LANG_MSG_PAYMENT_GATEWAY_COULD_NOT_RESPOND, "O sistema de pagamento n�o p�de responder");
	//Pending payments may take 3 to 4 days to be approved.
	define(LANG_MSG_PENDING_PAYMENTS_TAKE_3_4_DAYS_TO_BE_APPROVED, "Pagamentos pendentes podem levar de 3 a 4 dias para serem aprovados.");
	//Connection Failure
	define(LANG_MSG_CONNECTION_FAILURE, "Falha na Conex�o");
	//Please, fill correctly zip.
	define(LANG_MSG_FILL_CORRECTLY_ZIP, "Por favor, preencha corretamente o CEP.");
	//Please, fill correctly card verification number.
	define(LANG_MSG_FILL_CORRECTLY_CARD_VERIF_NUMBER, "Por favor, preencha corretamente o n�mero de verifica��o do cart�o.");
	//Card Type and Card Verification Number do not match.
	define(LANG_MSG_CARD_TYPE_VERIF_NUMBER_DO_NOT_MATCH, "Tipo de Cart�o e N�mero de Verifica��o n�o coincidem.");
	//Transaction Not Completed.
	define(LANG_MSG_TRANSACTION_NOT_COMPLETED, "A Transa��o n�o foi completada.");
	//Error Number:
	define(LANG_MSG_ERROR_NUMBER, "N�mero do Erro:");
	//Short Message
	define(LANG_MSG_SHORT_MESSAGE, "Mensagem:");
	//Long Message
	define(LANG_MSG_LONG_MESSAGE, "Mensagem:");
	//Transaction Completed Succesfully.
	define(LANG_MSG_TRANSACTION_COMPLETED_SUCCESSFULLY, "Transa��o Completada com Sucesso.");
	//Card expire date must be in the future
	define(LANG_MSG_CARD_EXPIRE_DATE_IN_FUTURE, "Data de expira��o do cart�o deve estar no futuro");
	//If your transaction was confirmed, information about it may be found in
	define(LANG_MSG_IF_TRANSACTION_WAS_CONFIRMED, "Se a sua transa��o foi confirmada, informa��es sobre ela podem ser encontradas em");
	//your transaction history after your payment is processed.
	define(LANG_MSG_YOUR_TRANSACTION_AFTER_PAYMENT_PROCESSED, "seu hist�rico de transa��o depois que seu pagamento for processado.");
	//after your payment is processed.
	define(LANG_MSG_AFTER_PAYMENT_IS_PROCESSED, "depois que seu pagamento for processado.");
	//No items requiring payment.
	define(LANG_MSG_NO_ITEMS_REQUIRING_PAYMENT, "Nenhum item requerendo pagamento.");
	//Pay for outstanding invoices
	define(LANG_MSG_PAY_OUTSTANDING_INVOICES, "Pagar por servi�os extras");
	//Banner by Impression and Custom Invoices can be paid once.
	define(LANG_MSG_BANNER_CUSTOM_INVOICE_PAID_ONCE, "Banners por visualiza��o e Servi�os Extras podem ser pagos somente uma vez.");
	//Banner by Impression can be paid once.
	define(LANG_MSG_BANNER_PAID_ONCE, "Banners por visualiza��o podem ser pagos somente uma vez.");
	//Custom Invoices can be paid once.
	define(LANG_MSG_CUSTOM_INVOICE_PAID_ONCE, "Servi�os Extras podem ser pagos somente uma vez.");
	//View Items
	define(LANG_VIEWITEMS, 'Ver Itens');
	//Please do not use recurring payment system.
	define(LANG_MSG_PLEASE_DO_NOT_USE_RECURRING_PAYMENT_SYSTEM, "Por favor n�o utilize sistema de pagamento recorrente.");
	//Try again!
	define(LANG_MSG_TRY_AGAIN, "Tente novamente!");
	//All fields are required.
	define(LANG_MSG_ALL_FIELDS_REQUIRED, "Todos os campos s�o obrigat�rios.");
	//"You have more than" X items. Please contact the administrator to check out it.
	define(LANG_MSG_OVERITEM_MORETHAN, "Voc� tem mais do que");
	//You have more than X items. "Please contact the administrator to check out it".
	define(LANG_MSG_OVERITEM_CONTACTADMIN, "Por favor entre em contato com o administrador para realizar o pagamento");
	//Article Options
	define(LANG_ARTICLE_OPTIONS, "Op��o de Artigo");
	//Article Author
	define(LANG_ARTICLE_AUTHOR, "Autor");
	//Article Author URL
	define(LANG_ARTICLE_AUTHOR_URL, "Website do autor");
	//Article Categories
	define(LANG_ARTICLE_CATEGORIES, "Categorias do Artigo");
	//Banner Type
	define(LANG_BANNER_TYPE, "Tipo de Banner");
	//Banner Options
	define(LANG_BANNER_OPTIONS, "Op��es de Banner");
	//Order Banner
	define(LANG_ORDER_BANNER, "Expira��o do Banner");
	//By time period
	define(LANG_BANNER_BY_TIME_PERIOD, "Por per�odo de tempo");
	//Banner Details
	define(LANG_BANNER_DETAIL_PLURAL, "Detalhes do Banner");
	//Script Banner
	define(LANG_SCRIPT_BANNER, "Banner por Script");
	//Show by Script Code
	define(LANG_SHOWSCRIPTCODE, "Mostrar por C�digo");
	//Allow script to be entered instead of an image. This field allows you to paste in script that will be used to display the banner from an affiliate program or external banner system. If "Show by Script Code" is checked, just "Script" field will be required. The other fields below will not be necessary.
	define(LANG_SCRIPTCODEHELP, "Permite que um c�digo seja inserido ao inv�s de uma imagem. Este campo permite que voc� cole um script que ser� utilizado para exibir o banner de um programa afiliado ou sistema externo de banner. Se \"Mostrar por C�digo\" estiver marcado, somente o campo \"Script\" ser� obrigat�rio. Os outros campos abaixo n�o ser�o necess�rios.");
	//Both "Destination Url" and "Traffic Report ClickThru" has no effect when you upload swf file
	define(LANG_BANNERFILEHELP, "Ambos \"Url de Destino\" e \"Relat�rio de Tr�fego - website\" n�o ter�o efeito se voc� fizer upload de um arquivo swf");
	//Classified Level
	define(LANG_CLASSIFIED_LEVEL, "N�vel do Classificado");
	//Classified Category
	define(LANG_CLASSIFIED_CATEGORY, "Categoria do Classificado");
	//Select classified level
	define(LANG_MENU_SELECT_CLASSIFIED_LEVEL, "Selecionar n�vel do classificado");
	//Classified Options
	define(LANG_CLASSIFIED_OPTIONS, "Op��es de Classificado");
	//Event Level
	define(LANG_EVENT_LEVEL, "N�vel do Evento");
	//Event Categories
	define(LANG_EVENT_CATEGORY_PLURAL, "Categorias do Evento");
	//Select event level
	define(LANG_MENU_SELECT_EVENT_LEVEL, "Selecionar n�vel do evento");
	//Event Options
	define(LANG_EVENT_OPTIONS, "Op��es de Evento");
	//Listing Level
	define(LANG_LISTING_LEVEL, "N�vel do estabelecimento");
	//Listing Template
	define(LANG_LISTING_TEMPLATE, "Modelo do estabelecimento");
	//Listing Categories
	define(LANG_LISTING_CATEGORIES, "Categorias do estabelecimento");
	//Listing Designations
	define(LANG_LISTING_DESIGNATION_PLURAL, "Classifica��es do estabelecimento");
	//Subject to administrator approval.
	define(LANG_LISTING_SUBJECTTOAPPROVAL, "Sujeito a aprova��o do administrador.");
	//Select this choice
	define(LANG_LISTING_SELECT_THIS_CHOICE, "Selecione esta op��o");
	//Select listing level
	define(LANG_MENU_SELECTLISTINGLEVEL, "Selecione o n�vel do estabelecimento");
	//Listing Options
	define(LANG_LISTING_OPTIONS, "Op��es de estabelecimento");
	//The Authorize Payment System is not available currently. Please contact the
	define(LANG_AUTHORIZE_NO_AVAILABLE, "O Sistema de Pagamento Authorize n�o est� dispon�vel no momento. Por favor, entre em contato com o");
	//The iTransact Payment System is not available currently. Please contact the
	define(LANG_ITRANSACT_NO_AVAILABLE, "O Sistema de Pagamento iTransact n�o est� dispon�vel no momento. Por favor, entre em contato com o");
	//The LinkPoint Payment System is not available currently. Please contact the
	define(LANG_LINKPOINT_NO_AVAILABLE, "O Sistema de Pagamento LinkPoint n�o est� dispon�vel no momento. Por favor, entre em contato com o");
	//The PayFlow Payment System is not available currently. Please contact the
	define(LANG_PAYFLOW_NO_AVAILABLE, "O Sistema de Pagamento PayFlow n�o est� dispon�vel no momento. Por favor, entre em contato com o");
	//The PayPal Payment System is not available currently. Please contact the
	define(LANG_PAYPAL_NO_AVAILABLE, "O Sistema de Pagamento PayPal n�o est� dispon�vel no momento. Por favor, entre em contato com o");
	//The PayPalAPI Payment System is not available currently. Please contact the
	define(LANG_PAYPALAPI_NO_AVAILABLE, "O Sistema de Pagamento PayPalAPI n�o est� dispon�vel no momento. Por favor, entre em contato com o");
	//The PSIGate Payment System is not available currently. Please contact the
	define(LANG_PSIGATE_NO_AVAILABLE, "O Sistema de Pagamento PSIGate n�o est� dispon�vel no momento. Por favor, entre em contato com o");
	//The 2CheckOut Payment System is not available currently. Please contact the
	define(LANG_TWOCHECKOUT_NO_AVAILABLE, "O Sistema de Pagamento 2CheckOut n�o est� dispon�vel no momento. Por favor, entre em contato com o");
	//The WorldPay Payment System is not available currently. Please contact the
	define(LANG_WORLDPAY_NO_AVAILABLE, "O Sistema de Pagamento WorldPay n�o est� dispon�vel no momento. Por favor, entre em contato com o");
	//Upload Warning
	define(LANG_UPLOAD_WARNING, "Aviso sobre o Upload");
	//File successfully uploaded!
	define(LANG_UPLOAD_MSG_SUCCESSUPLOADED, "Arquivo enviado com sucesso!");
	//Extension not allowed or wrong file type!
	define(LANG_UPLOAD_MSG_NOTALLOWED_WRONGFILETYPE, "Extens�o n�o permitida ou tipo errado de arquivo!");
	//File exceeds size limit!
	define(LANG_UPLOAD_MSG_EXCEEDSLIMIT, "O arquivo excedeu o tamanho permitido!");
	//Fail trying to create directory!
	define(LANG_UPLOAD_MSG_FAILCREATEDIRECTORY, "Falha ao tentar criar diret�rio!");
	//Wrong directory permission!
	define(LANG_UPLOAD_MSG_WRONGDIRECTORYPERMISSION, "Permiss�o errada!");
	//Unexpected failure!
	define(LANG_UPLOAD_MSG_UNEXPECTEDFAILURE, "Falha inesperada!");
	//File not found or not entered!
	define(LANG_UPLOAD_MSG_NOTFOUND_NOTENTERED, "Arquivo n�o encontrado ou n�o informado!");
	//File already exists in directory!
	define(LANG_UPLOAD_MSG_FILEALREADEXISTSINDIRECTORY, "Arquivo j� existente!");
	//View all locations
	define(LANG_VIEWALLLOCATIONSCATEGORIES, "Ver todas as localidades");
	//Popular Locations 
	define(LANG_POPULARLOCATIONS, "Localidades Populares"); 
	//There aren't any popular location in the system. 
	define(LANG_LABEL_NOPOPULARLOCATIONS, "N�o existe nenhuma localicade no sistema.");
	//Overview
	define(LANG_LABEL_OVERVIEW, "Resumo");
	//Video
	define(LANG_LABEL_VIDEO, "V�deo");
	//Map Location
	define(LANG_LABEL_MAPLOCATION, "Localiza��o no Mapa");
	//More Listings
	define(LANG_LABEL_MORELISTINGS, "Mais estabelecimentos");
	//More Events
	define(LANG_LABEL_MOREEVENTS, "Mais Eventos");
	//More Classifieds
	define(LANG_LABEL_MORECLASSIFIEDS, "Mais Classificados");
	//More Articles
	define(LANG_LABEL_MOREARTICLES, "Mais Artigos");
	//"Operation not allowed: The promotion" (promotion_name) is already associated with the listing
	define("LANG_MSGERROR_PROMOTIONOPERATIONNOTALLOWED1", 'Opera��o n�o permitida: A promo��o');
	//Operation not allowed: The promotion (promotion_name) "is already associated with the listing"
	define("LANG_MSGERROR_PROMOTIONOPERATIONNOTALLOWED2", 'ja est� associada a um estabelecimento');

	# ----------------------------------------------------------------------------------------------------
	# FUNCTIONS
	# ----------------------------------------------------------------------------------------------------
	//Photo Gallery
	define(LANG_GALLERYTITLE, "Galeria de Fotos");
	//"Click here" for Slideshow. You can also click on any of the photos to start slideshow.
	define(LANG_GALLERYCLICKHERE, "Clique aqui");
	//Click here "for Slideshow. You can also click on any of the photos to start slideshow."
	define(LANG_GALLERYSLIDESHOWTEXT, "ou nas fotos para iniciar o slideshow.");
	//more photos
	define(LANG_GALLERYMOREPHOTOS, "mais fotos");
	//Inexistent Discount Code
	define(LANG_MSG_INEXISTENT_DISCOUNT_CODE, "C�digo Promocional Inexistente");
	//is not available.
	define(LANG_MSG_IS_NOT_AVAILABLE, "n�o est� dispon�vel.");
	//is not available for this item type.
	define(LANG_MSG_IS_NOT_AVAILABLE_FOR, "n�o est� dispon�vel para este tipo de item.");
	//cannot be used twice.
	define(LANG_MSG_CANNOT_BE_USED_TWICE, "n�o pode ser utilizado duas vezes.");
	//"You can select up to" [ITEM_MAX_GALLERY] gallery(ies).
	define(LANG_MSG_YOU_CAN_SELECT_ITEM_GALLERY_UP, "Voc� pode selecionar at�");
	//You can select up to [ITEM_MAX_GALLERY] "gallery(ies)".
	define(LANG_MSG_YOU_CAN_SELECT_ITEM_GALLERY, "galeria.");
	//You can select up to [ITEM_MAX_GALLERY] "gallery(ies)".
	define(LANG_MSG_YOU_CAN_SELECT_ITEM_GALLERIES, "galerias.");
	//Title is required.
	define(LANG_MSG_TITLE_IS_REQUIRED, "T�tulo � obrigat�rio.");
	//Language is required.
	define(LANG_MSG_LANGUAGE_IS_REQUIRED, "Idioma � obrigat�rio.");
	//First Name is required.
	define(LANG_MSG_FIRST_NAME_IS_REQUIRED, "Nome � obrigat�rio.");
	//Last Name is required.
	define(LANG_MSG_LAST_NAME_IS_REQUIRED, "Sobrenome � obrigat�rio.");
	//Company is required.
	define(LANG_MSG_COMPANY_IS_REQUIRED, "estabelecimento � obrigat�rio.");
	//Phone is required.
	define(LANG_MSG_PHONE_IS_REQUIRED, "Fone � obrigat�rio.");
	//E-mail is required.
	define(LANG_MSG_EMAIL_IS_REQUIRED, "E-mail � obrigat�rio.");
	//Account is required.
	define(LANG_MSG_ACCOUNT_IS_REQUIRED, "Conta � obrigat�rio.");
	//Page Name is required.
	define(LANG_MSG_PAGE_NAME_IS_REQUIRED, "Nome da P�gina � obrigat�rio.");
	//Category is required.
	define(LANG_MSG_CATEGORY_IS_REQUIRED, "Categoria � obrigat�ria.");
	//Abstract is required.
	define(LANG_MSG_ABSTRACT_IS_REQUIRED, "Resumo � obrigat�rio.");
	//Expiration type is required.
	define(LANG_MSG_EXPIRATION_TYPE_IS_REQUIRED, "Tipo de expira��o � obrigat�rio.");
	//Renewal Date is required.
	define(LANG_MSG_RENEWAL_DATE_IS_REQUIRED, "Data de Renova��o � obrigat�rio.");
	//Impressions are required.
	define(LANG_MSG_IMPRESSIONS_ARE_REQUIRED, "Visualiza��es � obrigat�rio.");
	//File is required.
	define(LANG_MSG_FILE_IS_REQUIRED, "Arquivo � obrigat�rio.");
	//Type is required.
	define(LANG_MSG_TYPE_IS_REQUIRED, "Tipo � obrigat�rio.");
	//Caption is required.
	define(LANG_MSG_CAPTION_IS_REQUIRED, "Legenda � obrigat�rio.");
	//Script Code is required.
	define(LANG_MSG_SCRIPT_CODE_IS_REQUIRED, "C�digo � obrigat�rio.");
	//Description 1 is required.
	define(LANG_MSG_DESCRIPTION1_IS_REQUIRED, "Descri��o 1 � obrigat�rio.");
	//Description 2 is required.
	define(LANG_MSG_DESCRIPTION2_IS_REQUIRED, "Descri��o 2 � obrigat�rio.");
	//Name is required.
	define(LANG_MSG_NAME_IS_REQUIRED, "Nome � obrigat�rio.");
	//"Headline" is required.
	define(LANG_MSG_HEADLINE_IS_REQUIRED, "\"T�tulo\" � obrigat�rio.");
	//"Offer" is required.
	define(LANG_MSG_OFFER_IS_REQUIRED, "\"Oferta\" � obrigat�rio.");
	//"Start Date" is required.
	define(LANG_MSG_START_DATE_IS_REQUIRED, "\"Data de In�cio\" � obrigat�rio.");
	//"End Date" is required.
	define(LANG_MSG_END_DATE_IS_REQUIRED, "\"Data de T�rmino\" � obrigat�ria.");
	//Text is required.
	define(LANG_MSG_TEXT_IS_REQUIRED, "Texto � obrigat�rio.");
	//"Username" is required.
	define(LANG_MSG_USERNAME_IS_REQUIRED, "\"Usu�rio\" � obrigat�rio.");
	//"Current Password" is incorrect.
	define(LANG_MSG_CURRENT_PASSWORD_IS_INCORRECT, "\"Senha Atual\" est� incorreta.");
	//"Password" is required.
	define(LANG_MSG_PASSWORD_IS_REQUIRED, "\"Senha\" � obrigat�rio.");
	//"Agree to terms of use" is required.
	define(LANG_MSG_IGREETERMS_IS_REQUIRED, "\"Eu concordo com os termos de uso\" � obrigat�rio.");
	//The following fields were not filled or contain errors:
	define(LANG_MSG_FIELDS_CONTAIN_ERRORS, "Os campos a seguir n�o foram preenchidos ou cont�m erros:");
	//Title - Please fill out the field
	define(LANG_MSG_TITLE_PLEASE_FILL_OUT, "T�tulo - Por favor, preencha o campo");
	//Page Name - Please fill out the field
	define(LANG_MSG_PAGE_NAME_PLEASE_FILL_OUT, "Nome da P�gina - Por favor, preencha o campo");
	//"Maximum of" [MAX_CATEGORY_ALLOWED] categories are allowed
	define(LANG_MSG_MAX_OF_CATEGORIES_1, "No m�ximo");
	//Maximum of [MAX_CATEGORY_ALLOWED] "categories are allowed"
	define(LANG_MSG_MAX_OF_CATEGORIES_2, "categorias s�o permitidas");
	//Friendly URL Page Name already in use, please choose another Page Name.
	define(LANG_MSG_FRIENDLY_URL_IN_USE, "A URL Amig�vel j� est� em uso, por favor, escolha outra.");
	//Page Name contain invalid chars
	define(LANG_MSG_PAGE_NAME_INVALID_CHARS, "O Nome da P�gina cont�m caracteres inv�lidos");
	//"Maximum of" [MAX_KEYWORDS] keywords are allowed
	define(LANG_MSG_MAX_OF_KEYWORDS_ALLOWED_1, "No m�ximo");
	//Maximum of [MAX_KEYWORDS] "keywords are allowed"
	define(LANG_MSG_MAX_OF_KEYWORDS_ALLOWED_2, "palavras-chave s�o permitidas");
	//Please include keywords with a maximum of 50 characters each
	define(LANG_MSG_PLEASE_INCLUDE_KEYWORDS, "Por favor, coloque palavras-chave com no m�ximo 50 caracteres cada");
	//Please enter a valid "Publication Date".
	define(LANG_MSG_ENTER_VALID_PUBLICATION_DATE, "Por favor, digite uma \"Data de Publica��o\" v�lida.");
	//Please enter a valid "Start Date".
	define(LANG_MSG_ENTER_VALID_START_DATE, "Por favor, digite uma \"Data de In�cio\" v�lida.");
	//Please enter a valid "End Date".
	define(LANG_MSG_ENTER_VALID_END_DATE, "Por favor, digite uma \"Data de T�rmino\" v�lida.");
	//The "End Date" must be greater than or equal to the "Start Date".
	define(LANG_MSG_END_DATE_GREATER_THAN_START_DATE, "A \"Data de T�rmino\" deve ser maior ou igual a \"Data de In�cio\".");
	//The "End Date" cannot be in past.
	define(LANG_MSG_END_DATE_CANNOT_IN_PAST, "A \"Data de T�rmino\" n�o pode estar no passado.");
	//Please enter a valid e-mail address.
	define(LANG_MSG_ENTER_VALID_EMAIL_ADDRESS, "Por favor, digite um e-mail v�lido.");
	//Please enter a valid "URL".
	define(LANG_MSG_ENTER_VALID_URL, "Por favor, digite uma \"URL\" v�lida.");
	//Please provide a description with a maximum of 255 characters.
	define(LANG_MSG_PROVIDE_DESCRIPTION_WITH_255_CHARS, "Por favor, forne�a uma descri��o com no m�ximo 255 caracteres.");
	//Please provide a conditions with a maximum of 255 characters.
	define(LANG_MSG_PROVIDE_CONDITIONS_WITH_255_CHARS, "Por favor, forne�a uma condi��o com no m�ximo 255 caracteres.");
	//Please enter a valid renewal date.
	define(LANG_MSG_ENTER_VALID_RENEWAL_DATE, "Por favor, digite uma data de renova��o v�lida.");
	//Renewal date must be in the future.
	define(LANG_MSG_RENEWAL_DATE_IN_FUTURE, "A data de renova��o deve estar no futuro.");
	//Please enter a valid expiration date.
	define(LANG_MSG_ENTER_VALID_EXPIRATION_DATE, "Por favor, digite uma data de expira��o.");
	//Expiration date must be in the future.
	define(LANG_MSG_EXPIRATION_DATE_IN_FUTURE, "A data de expira��o deve estar no futuro.");
	//Blank space is not allowed for password.
	define(LANG_MSG_BLANK_SPACE_NOT_ALLOWED_FOR_PASSWORD, "A senha n�o pode ter espa�os.");
	//"Please enter a password with a maximum of" [PASSWORD_MAX_LEN] [LANG_LABEL_CHARACTERES]
	define(LANG_MSG_ENTER_PASSWORD_WITH_MAX_CHARS, "Por favor, digite uma senha com no m�ximo");
	//"Please enter a password with a minimum of" [PASSWORD_MIN_LEN] [LANG_LABEL_CHARACTERES]
	define(LANG_MSG_ENTER_PASSWORD_WITH_MIN_CHARS, "Por favor, digite uma senha com no m�nimo");
	//Password "abc123" not allowed!
	define(LANG_MSG_ABC123_NOT_ALLOWED, "N�o � permitido senha \"abc123\"!");
	//Passwords do not match. Please enter the same content for "password" and "retype password" fields.
	define(LANG_MSG_PASSWORDS_DO_NOT_MATCH, "As senhas n�o coincidem. Por favor, digite a mesma senha nos campos \"Senha\" e \"Confirme a Senha\".");
	//Spaces are not allowed for username.
	define(LANG_MSG_SPACES_NOT_ALLOWED_FOR_USERNAME, "O usu�rio n�o pode ter espa�os.");
	//Special characters are not allowed for username.
	define(LANG_MSG_SPECIAL_CHARS_NOT_ALLOWED_FOR_USERNAME, "O usu�rio n�o pode ter caracteres especiais.");
	//"Please choose an username with a maximum of" [USERNAME_MAX_LEN] [LANG_LABEL_CHARACTERES]
	define(LANG_MSG_CHOOSE_USERNAME_WITH_MAX_CHARS, "Por favor, escolha um usu�rio com no m�ximo");
	//"Please choose an username with a minimum of" [USERNAME_MIN_LEN] [LANG_LABEL_CHARACTERES]
	define(LANG_MSG_CHOOSE_USERNAME_WITH_MIN_CHARS, "Por favor, escolha um usu�rio com no m�nimo");
	//Please choose a different username.
	define(LANG_MSG_CHOOSE_DIFFERENT_USERNAME, "Por favor, escolha um usu�rio diferente.");

	# ----------------------------------------------------------------------------------------------------
	# MENU
	# ----------------------------------------------------------------------------------------------------
	//Home
	define(LANG_MENU_HOME, "Home");
	//Member Options
	define(LANG_MENU_MEMBEROPTIONS, "S�cio - Op��es");
	//Listings
	define(LANG_MENU_LISTING, "estabelecimentos");
	//Add Listing
	define(LANG_MENU_ADDLISTING, "Adicionar estabelecimento");
	//Manage Listings
	define(LANG_MENU_MANAGELISTING, "Gerenciar estabelecimentos");
	//Galleries
	define(LANG_MENU_GALLERY, "Galerias");
	//Add Gallery
	define(LANG_MENU_ADDGALLERY, "Adicionar Galeria");
	//Manage Gallery
	define(LANG_MENU_MANAGEGALLERY, "Gerenciar Galeria");
	//Events
	define(LANG_MENU_EVENT, "Eventos");
	//Add Event
	define(LANG_MENU_ADDEVENT, "Adicionar Evento");
	//Manage Events
	define(LANG_MENU_MANAGEEVENT, "Gerenciar Evento");
	//Banners
	define(LANG_MENU_BANNER, "Banners");
	//Add Banner
	define(LANG_MENU_ADDBANNER, "Adicionar Banner");
	//Manage Banners
	define(LANG_MENU_MANAGEBANNER, "Gerenciar Banners");
	//Classifieds
	define(LANG_MENU_CLASSIFIED, "Classificados");
	//Add Classified
	define(LANG_MENU_ADDCLASSIFIED, "Adicionar Classificados");
	//Manage Classifieds
	define(LANG_MENU_MANAGECLASSIFIED, "Gerenciar Classificados");
	//Articles
	define(LANG_MENU_ARTICLE, "Artigos");
	//Add Article
	define(LANG_MENU_ADDARTICLE, "Adicionar Artigo");
	//Manage Articles
	define(LANG_MENU_MANAGEARTICLE, "Gerenciar Artigos");
	//Promotions
	define(LANG_MENU_PROMOTION, "Promo��es");
	//Add Promotion
	define(LANG_MENU_ADDPROMOTION, "Adicionar Promo��o");
	//Manage Promotions
	define(LANG_MENU_MANAGEPROMOTION, "Gerenciar Promo��es");
	//Advertise With Us
	define(LANG_MENU_ADVERTISE, "Anuncie Aqui");
	//FAQ
	define(LANG_MENU_FAQ, "FAQ");
	//Sitemap
	define(LANG_MENU_SITEMAP, "Mapa do Site");
	//Contact Us
	define(LANG_MENU_CONTACT, "Contato");
	//Payment Options
	define(LANG_MENU_PAYMENTOPTIONS, "Pagamento - Op��es");
	//Check Out
	define(LANG_MENU_CHECKOUT, "Pagar");
	//Make Your Payment
	define(LANG_MENU_MAKEPAYMENT, "Fa�a seu Pagamento");
	//History
	define(LANG_MENU_HISTORY, "Hist�rico");
	//Transaction History
	define(LANG_MENU_TRANSACTIONHISTORY, "Hist�rico de Transa��es");
	//Invoice History
	define(LANG_MENU_INVOICEHISTORY, "Hist�rico de Faturas");
	//Choose a Theme
	define(LANG_MENU_CHOOSETHEME, "Escolha um Tema");

	# ----------------------------------------------------------------------------------------------------
	# SEARCH
	# ----------------------------------------------------------------------------------------------------
	//Search Article
	define(LANG_LABEL_SEARCHARTICLE, "Busca de Artigos");
	//Search Classified
	define(LANG_LABEL_SEARCHCLASSIFIED, "Busca de Classificados");
	//Search Event
	define(LANG_LABEL_SEARCHEVENT, "Busca de Eventos");
	//Search Listing
	define(LANG_LABEL_SEARCHLISTING, "Busca de estabelecimentos");
	//Search Promotion
	define(LANG_LABEL_SEARCHPROMOTION, "Busca de Promo��es");
	//Advanced Search
	define(LANG_SEARCH_ADVANCEDSEARCH, "Busca Avan�ada");
	//Search
	define(LANG_SEARCH_LABELKEYWORD, "Procurar por");
	//Location
	define(LANG_SEARCH_LABELLOCATION, "Localidade");
	//Select a Country
	define(LANG_SEARCH_LABELCBCOUNTRY, "Selecione um Pa�s");
	//Select a State
	define(LANG_SEARCH_LABELCBSTATE, "Selecione um Estado");
	//Select a City
	define(LANG_SEARCH_LABELCBCITY, "Selecione uma Cidade");
	//Category
	define(LANG_SEARCH_LABELCATEGORY, "Categoria");
	//Select a Category
	define(LANG_SEARCH_LABELCBCATEGORY, "Selecione uma Categoria");
	//Match
	define(LANG_SEARCH_LABELMATCH, "Filtro");
	//exact match
	define(LANG_SEARCH_LABELMATCH_EXACTMATCH, "senten�a exata");
	//any word
	define(LANG_SEARCH_LABELMATCH_ANYWORD, "qualquer palavra");
	//all words
	define(LANG_SEARCH_LABELMATCH_ALLWORDS, "todas as palavras");
	//Listing Type
	define(LANG_SEARCH_LABELBROWSE, "Tipo de estabelecimento");
	//from
	define(LANG_SEARCH_LABELFROM, "de");
	//to
	define(LANG_SEARCH_LABELTO, "at�");
	//Miles "of"
	define(LANG_SEARCH_LABELZIPCODE_OF, "do");
	//Search by keyword
	define(LANG_LABEL_SEARCHFAQ, "Busca por Palavra-Chave ");
	//Search
	define(LANG_LABEL_SEARCHFAQ_BUTTON, "Procurar");

	# ----------------------------------------------------------------------------------------------------
	# FRONTEND
	# ----------------------------------------------------------------------------------------------------
	//Featured
	define(LANG_ITEM_FEATURED, "Destaque");
	//Recent Articles
	define(LANG_RECENT_ARTICLE, "Novos Artigos");
	//Upcoming Events
	define(LANG_UPCOMING_EVENT, "Pr�ximos Eventos");
	//Featured Classifieds
	define(LANG_FEATURED_CLASSIFIED, "Destaque: Classificados");
	//Featured Articles
	define(LANG_FEATURED_ARTICLE, "Destaque: Artigos");
	//Featured Listings
	define(LANG_FEATURED_LISTING, "Destaque: estabelecimentos");
	//Featured Promotions
	define(LANG_FEATURED_PROMOTION, "Destaque: Promo��es");
	//Easy and Fast.
	define(LANG_EASYANDFAST, "F�cil e R�pido.");
	//3 Steps
	define(LANG_THREESTEPS, "3 Passos");
	//Account Signup
	define(LANG_ACCOUNTSIGNUP, "Cadastro");
	//Listing Update
	define(LANG_LISTINGUPDATE, "Editar estabelecimento");
	//Order
	define(LANG_ORDER, "Cadastro");
	//Check Out
	define(LANG_CHECKOUT, "Pagamento");
	//Configuration
	define(LANG_CONFIGURATION, "Configura��o");
	//Select a package
	define(LANG_SELECTPACKAGE, "Selecione um plano");
	//Do you already have an account?
	define(LANG_ALREADYHAVEACCOUNT, "Voc� j� tem uma conta?");
	//No, I'm a New User.
	define(LANG_ACCOUNTNEWUSER, "N�o, sou um Novo Usu�rio.");
	//Yes, I have an Existing Account.
	define(LANG_ACCOUNTEXISTSUSER, "Sim, j� tenho uma Conta.");
	//Yes, I have a Directory Account.
	define(LANG_ACCOUNTDIRECTORYUSER, "Sim, j� tenho uma conta no Diret�rio.");
	//Yes, I have an OpenID 2.0 Account.
	define(LANG_ACCOUNTOPENIDUSER, "Sim, j� tenho uma conta OpenID 2.0.");
	//Yes, I have a Facebook Account.
	define(LANG_ACCOUNTFACEBOOKUSER, "Sim, j� tenho uma conta Facebook.");
	//Account Information
	define(LANG_ACCOUNTINFO, "Informa��es da Conta");
	//Additional Information
	define(LANG_LABEL_ADDITIONALINFORMATION, "Informa��es Adicionais");
	//Please write down your username and password for future reference.
	define(LANG_ACCOUNTINFOMSG, "Por favor, anote o seu usu�rio e senha para futura refer�ncia.");
	//"Username must be between" [USERNAME_MIN_LEN] and [USERNAME_MAX_LEN] characters with no spaces.
	define(LANG_USERNAME_MSG1, "Usu�rio deve ter entre");
	//Username must be between [USERNAME_MIN_LEN] "and" [USERNAME_MAX_LEN] characters with no spaces.
	define(LANG_USERNAME_MSG2, "e");
	//Username must be between [USERNAME_MIN_LEN] and [USERNAME_MAX_LEN] "characters with no spaces."
	define(LANG_USERNAME_MSG3, "caracteres sem espa�os.");
	//"Password must be between" [PASSWORD_MIN_LEN] and [PASSWORD_MAX_LEN] characters with no spaces.
	define(LANG_PASSWORD_MSG1, "A senha deve ter entre");
	//Password must be between [PASSWORD_MIN_LEN] "and" [PASSWORD_MAX_LEN] characters with no spaces.
	define(LANG_PASSWORD_MSG2, "e");
	//Password must be between [PASSWORD_MIN_LEN] and [PASSWORD_MAX_LEN] "characters with no spaces."
	define(LANG_PASSWORD_MSG3, "caracteres sem espa�os.");
	//I agree with the terms of use
	define(LANG_IGREETERMS, "Eu concordo com os termos de uso");
	//Do you want to advertise with us?
	define(LANG_DOYOUWANT_ADVERTISEWITHUS, "Gostaria de anunciar conosco?");
	//Buy a link
	define(LANG_BUY_LINK, "Anuncie tamb�m");
	//Back to Top
	define(LANG_BACKTOTOP, 'Voltar para o topo');
	//View Quick List
	define(LANG_QUICK_LIST, "Meus Favoritos");
	//view summary
	define(LANG_VIEWSUMMARY, 'ver resumo');
	//view detail
	define(LANG_VIEWDETAIL, 'ver detalhes');
	//Advertisers
	define(LANG_ADVERTISER, "Publicidade");
	//Order Now!
	define(LANG_ORDERNOW, "Cadastre-se!");
	//Wait, Loading...
	define(LANG_WAITLOADING, "Aguarde, Carregando...");
	//Total Price Amount
	define(LANG_TOTALPRICEAMOUNT, "Pre�o Total");
	//Quick List
	define(LANG_LABEL_QUICKLIST, "Lista de Favoritos");
	//You have not selected any quick list items yet.
	define(LANG_LABEL_NOQUICKLIST, "Voc� n�o adicionou nenhum item ainda.");
	//Search results for
	define(LANG_LABEL_SEARCHRESULTSFOR, "Resultados da busca por");
	//Related Search
	define(LANG_LABEL_RELATEDSEARCH, "Busca Relacionada");
	//Browse by Section
	define(LANG_LABEL_BROWSESECTION, "Procure por Se��o");
	//Keyword
	define(LANG_LABEL_SEARCHKEYWORD, "Palavra-Chave");
	//(type a keyword)
	define(LANG_LABEL_SEARCHKEYWORDTIP, "");
	//(type a keyword or listing name)
	define(LANG_LABEL_SEARCHKEYWORDTIP_LISTING, "");
	//(type a keyword or promotion title)
	define(LANG_LABEL_SEARCHKEYWORDTIP_PROMOTION, "");
	//(type a keyword or event title)
	define(LANG_LABEL_SEARCHKEYWORDTIP_EVENT, "");
	//(type a keyword or classified title)
	define(LANG_LABEL_SEARCHKEYWORDTIP_CLASSIFIED, "");
	//(type a keyword or article title)
	define(LANG_LABEL_SEARCHKEYWORDTIP_ARTICLE, "(palavra-chave ou t�tulo do artigo)");
	//Where
	define(LANG_LABEL_SEARCHWHERE, "Onde");
	//(Address, City, State or Zip Code)
	define(LANG_LABEL_SEARCHWHERETIP, "(Endere�o, Cidade, Estado ou CEP)");
	//Complete the form below to contact us.
	define(LANG_LABEL_FORMCONTACTUS, "
Fale Conosco");
	//Message
	define(LANG_LABEL_MESSAGE, "Mensagem");
	//No categories found
	define(LANG_CATEGORY_NOTFOUND, "Nenhuma categoria encontrada");
	//Please, select a valid category
	define(LANG_CATEGORY_INVALIDERROR, "Por favor, selecione uma categoria v�lida");
	//Please select a category first!
	define(LANG_CATEGORY_SELECTFIRSTERROR, "Por favor, selecione uma categoria primeiro!");
	//View Category Path
	define(LANG_CATEGORY_VIEWPATH, "Ver o Caminho da Categoria");
	//Remove Selected Category
	define(LANG_CATEGORY_REMOVESELECTED, "Remover a Categoria");
	//"Extra categories/sub-categories cost an" additional [LEVEL_CATEGORY_PRICE] each. Be seen!
	define(LANG_CATEGORIES_PRICEDESC1, "Categorias/subcategorias extras ter�o um custo");
	//Extra categories/sub-categories cost an "additional" [LEVEL_CATEGORY_PRICE] each. Be seen!
	define(LANG_CATEGORIES_PRICEDESC2, "adicional de");
	//Extra categories/sub-categories cost an additional [LEVEL_CATEGORY_PRICE] "each. Be seen!"
	define(LANG_CATEGORIES_PRICEDESC3, "cada. Seja visto!");
	//Categories and sub-categories
	define(LANG_CATEGORIES_TITLE, "Categorias e Subcategorias");
	//Only select sub-categories that directly apply to your type.
	define(LANG_CATEGORIES_MSG1, "Selecione somente subcategorias que se enquadram diretamente em seu estabelecimento.");
	//Your listing will automatically appear in the main category of each sub-category you select.
	define(LANG_CATEGORIES_MSG2, "Seu estabelecimento aparecer� automaticamente na categoria principal de cada subcategoria que voc� selecionar.");
	//Account Information Error
	define(LANG_ACCOUNTINFO_ERROR, "Informa��es da Conta Possuem Erros");
	//Contact Information
	define(LANG_CONTACTINFO, "Informa��es de Contato");
	//This information will not be displayed publicly.
	define(LANG_CONTACTINFO_MSG, "Estas informa��es n�o ser�o divulgadas.");
	//Billing Information
	define(LANG_BILLINGINFO, "Informa��es da Fatura");
	//This information will not be displayed publicly.
	define(LANG_BILLINGINFO_MSG1, "Estas informa��es n�o ser�o divulgadas.");
	//You will configure your article after placing the order.
	define(LANG_BILLINGINFO_MSG2_ARTICLE, "Voc� ir� configurar seu artigo ap�s fazer o cadastro.");
	//You will configure your banner after placing the order.
	define(LANG_BILLINGINFO_MSG2_BANNER, "Voc� ir� configurar seu banner ap�s fazer o cadastro.");
	//You will configure your classified after placing the order.
	define(LANG_BILLINGINFO_MSG2_CLASSIFIED, "Voc� ir� configurar seu classificado ap�s fazer o cadastro.");
	//You will configure your event after placing the order.
	define(LANG_BILLINGINFO_MSG2_EVENT, "Voc� ir� configurar seu evento ap�s fazer o cadastro.");
	//You will configure your listing after placing the order.
	define(LANG_BILLINGINFO_MSG2_LISTING, "Voc� ir� configurar seu estabelecimento ap�s fazer o cadastro.");
	//Billing Information Error
	define(LANG_BILLINGINFO_ERROR, "Informa��es da Fatura Possuem Erros");
	//Article Information
	define(LANG_ARTICLEINFO, "Informa��es do Artigo");
	//Article Information Error
	define(LANG_ARTICLEINFO_ERROR, "Informa��es do Artigo Possuem Erros");
	//Banner Information
	define(LANG_BANNERINFO, "Informa��es do Banner");
	//Banner Information Error
	define(LANG_BANNERINFO_ERROR, "Informa��es do Banner Possuem Erros");
	//Classified Information
	define(LANG_CLASSIFIEDINFO, "Informa��es do Classificado");
	//Classified Information Error
	define(LANG_CLASSIFIEDINFO_ERROR, "Informa��es do Classificado Possuem Erros");
	//Browse Events by Date
	define(LANG_BROWSEEVENTSBYDATE, "Procure Eventos por Data");
	//Event Information
	define(LANG_EVENTINFO, "Informa��es do Evento");
	//Event Information Error
	define(LANG_EVENTINFO_ERROR, "Informa��es do Evento Possuem Erros");
	//Listing Information
	define(LANG_LISTINGINFO, "Informa��es do estabelecimento");
	//Listing Information Error
	define(LANG_LISTINGINFO_ERROR, "Informa��es do estabelecimento Possuem Erros");
	//Claim this Listing
	define(LANG_LISTING_CLAIMTHIS, "Solicite este estabelecimento");
	//Listing Template
	define(LANG_LISTING_LABELTEMPLATE, "Modelo do estabelecimento");
	//No results were found for the search criteria you requested.
	define(LANG_MSG_NORESULTS, "Nenhum resultado foi encontrado com o seu crit�rio de busca.");
	//Please try your search again or browse by section.
	define(LANG_MSG_TRYAGAIN_BROWSESECTION, "Por favor, tente novamente ou procure por se��o.");
	//Sometimes you may receive no results for your search because the keyword you used is highly generic. Try to use a more specific keyword and perform your search again.
	define(LANG_MSG_USE_SPECIFIC_KEYWORD, "Algumas vezes sua busca pode n�o retornar resultados porque a palavra-chave utilizada foi muito gen�rica. Tente fazer uma nova busca usando uma palavra-chave mais espec�fica.");
	//Please type at least one keyword on the search box.
	define(LANG_MSG_LEASTONEKEYWORD, "Por favor, digite pelo menos uma palavra-chave no formul�rio de busca.");
	//Image
	define(LANG_SLIDESHOW_IMAGE, "Imagem");
	//of
	define(LANG_SLIDESHOW_IMAGEOF, "de");
	//Error loading image
	define(LANG_SLIDESHOW_IMAGELOADINGERROR, "Erro ao carregar imagem");
	//Next
	define(LANG_SLIDESHOW_NEXT, "Pr�xima");
	//Pause
	define(LANG_SLIDESHOW_PAUSE, "Pausar");
	//Play
	define(LANG_SLIDESHOW_PLAY, "Play");
	//Back
	define(LANG_SLIDESHOW_BACK, "Anterior");
	//Your e-mail has been sent. Thank you.
	define(LANG_CONTACTMSGSUCCESS, "Sua mensagem foi enviada. Obrigado.");
	//There was a problem sending this e-mail. Please try again.
	define(LANG_CONTACTMSGFAILED, "Ocorreu um problema ao tentar enviar seu e-mail. Por favor, tente novamente.");
	//Please enter a valid e-mail address!
	define(LANG_MSG_CONTACT_ENTER_VALID_EMAIL, "Por favor, digite um e-mail v�lido!");
	//Please type the message!
	define(LANG_MSG_CONTACT_TYPE_MESSAGE, "Por favor, digite a mensagem!");
	//Please type the code correctly!
	define(LANG_MSG_CONTACT_TYPE_CODE, "Por favor, digite o c�digo de verifica��o corretamente!");
	//Please correct it and try again.
	define(LANG_MSG_CONTACT_CORRECTIT_TRYAGAIN, "Por favor, corrija os itens e tente novamente.");
	//Please type a name!
	define(LANG_MSG_CONTACT_TYPE_NAME, "Por favor, digite um nome!");
	//Please type a subject!
	define(LANG_MSG_CONTACT_TYPE_SUBJECT, "Por favor, digite um assunto!");
	//SOME DETAILS
	define(LANG_ARTICLE_TOFRIEND_MAIL, "ALGUNS DETALHES");
	//SOME DETAILS
	define(LANG_CLASSIFIED_TOFRIEND_MAIL, "ALGUNS DETALHES");
	//SOME DETAILS
	define(LANG_EVENT_TOFRIEND_MAIL, "ALGUNS DETALHES");
	//SOME DETAILS
	define(LANG_LISTING_TOFRIEND_MAIL, "ALGUNS DETALHES");
	//SOME DETAILS
	define(LANG_PROMOTION_TOFRIEND_MAIL, "ALGUNS DETALHES");
	//Please enter a valid e-mail address in the "To" field 
	define(LANG_MSG_TOFRIEND1, "Por favor, digite um e-mail v�lido no campo \"Para\"");
	//Please enter a valid e-mail address in the "From" field
	define(LANG_MSG_TOFRIEND2, "Por favor, digite um e-mail v�lido no campo \"De\"");
	//"About" [ARTICLE_TITLE] from the [EDIRECTORY_TITLE]
	define(LANG_ARTICLE_CONTACTSUBJECT_ISNULL_1, "Sobre");
	//About [ARTICLE_TITLE] "from the" [EDIRECTORY_TITLE]
	define(LANG_ARTICLE_CONTACTSUBJECT_ISNULL_2, "do");
	//"About" [CLASSIFIED_TITLE] from the [EDIRECTORY_TITLE]
	define(LANG_CLASSIFIED_CONTACTSUBJECT_ISNULL_1, "Sobre");
	//About [CLASSIFIED_TITLE] "from the" [EDIRECTORY_TITLE]
	define(LANG_CLASSIFIED_CONTACTSUBJECT_ISNULL_2, "do");
	//"About" [EVENT_TITLE] from the [EDIRECTORY_TITLE]
	define(LANG_EVENT_CONTACTSUBJECT_ISNULL_1, "Sobre");
	//About [EVENT_TITLE] "from the" [EDIRECTORY_TITLE]
	define(LANG_EVENT_CONTACTSUBJECT_ISNULL_2, "do");
	//"About" [LISTING_TITLE] from the [EDIRECTORY_TITLE]
	define(LANG_LISTING_CONTACTSUBJECT_ISNULL_1, "Sobre");
	//About [LISTING_TITLE] "from the" [EDIRECTORY_TITLE]
	define(LANG_LISTING_CONTACTSUBJECT_ISNULL_2, "do");
	//"About" [PROMOTION_TITLE] from the [EDIRECTORY_TITLE]
	define(LANG_PROMOTION_CONTACTSUBJECT_ISNULL_1, "Sobre");
	//About [PROMOTION_TITLE] "from the" [EDIRECTORY_TITLE]
	define(LANG_PROMOTION_CONTACTSUBJECT_ISNULL_2, "do");
	//Send info about this article to a friend
	define(LANG_ARTICLE_TOFRIEND_SAUDATION, "Enviar informa��es sobre este artigo para um amigo");
	//Send info about this classified to a friend
	define(LANG_CLASSIFIED_TOFRIEND_SAUDATION, "Enviar informa��es sobre este classificado para um amigo");
	//Send info about this event to a friend
	define(LANG_EVENT_TOFRIEND_SAUDATION, "Enviar informa��es sobre este evento para um amigo");
	//Send info about this listing to a friend
	define(LANG_LISTING_TOFRIEND_SAUDATION, "Enviar informa��es sobre este estabelecimento para um amigo");
	//Send info about this promotion to a friend
	define(LANG_PROMOTION_TOFRIEND_SAUDATION, "Enviar informa��es sobre esta promo��o para um amigo");
	//Contact
	define(LANG_CONTACT, "Entrar em contato com");
	//article
	define(LANG_ARTICLE, "artigo");
	//classified
	define(LANG_CLASSIFIED, "classificado");
	//event
	define(LANG_EVENT, "evento");
	//listing
	define(LANG_LISTING, "estabelecimento");
	//promotion
	define(LANG_PROMOTION, "promo��o");
	//Please search at least one parameter on the search box!
	define(LANG_MSG_LEASTONEPARAMETER, "Por favor, busque por pelo menos um par�metro no formul�rio de busca!");
	//Please try your search again.
	define(LANG_MSG_TRYAGAIN, "Por favor, tente sua busca novamente.");
	//No articles registered yet.
	define(LANG_MSG_NOARTICLES, "Nenhum artigo registrado ainda.");
	//No classifieds registered yet.
	define(LANG_MSG_NOCLASSIFIEDS, "Nenhum classificado registrado ainda.");
	//No events registered yet.
	define(LANG_MSG_NOEVENTS, "Nenhum evento registrado ainda.");
	//No listings registered yet.
	define(LANG_MSG_NOLISTINGS, "Nenhum estabelecimento registrada ainda.");
	//No promotions registered yet.
	define(LANG_MSG_NOPROMOTIONS, "Nenhuma promo��o registrada ainda.");
	//Message sent through
	define(LANG_CONTACTPRESUBJECT, "Mensagem enviada atrav�s do");
	//E-mail Form
	define(LANG_EMAILFORM, "Formul�rio de E-mail");
	//Click here to print
	define(LANG_PRINTCLICK, "Clique aqui para imprimir");
	//View all categories
	define(LANG_CLASSIFIED_VIEWALLCATEGORIES, "Ver todas as categorias");
	//Location
	define(LANG_CLASSIFIED_LOCATIONS, "Localiza��o");
	//More Classifieds
	define(LANG_CLASSIFIED_MORE, "Mais Classificados");
	//View all categories
	define(LANG_EVENT_VIEWALLCATEGORIES, "Ver todas as categorias");
	//Location
	define(LANG_EVENT_LOCATIONS, "Localiza��o");
	//Featured Events
	define(LANG_EVENT_FEATURED, "Destaque: Eventos");
	//events
	define(LANG_EVENT_PLURAL, "eventos");
	//Search results
	define(LANG_SEARCHRESULTS, "Resultados da busca");
	//Results
	define(LANG_RESULTS, "Resultados");
	//Search results "for" keyword
	define(LANG_SEARCHRESULTS_KEYWORD, "por");
	//Search results "in" where
	define(LANG_SEARCHRESULTS_WHERE, "em");
	//Search results "in" template
	define(LANG_SEARCHRESULTS_TEMPLATE, "em");
	//Search results "in" category
	define(LANG_SEARCHRESULTS_CATEGORY, "em");
	//Search results "in category"
	define(LANG_SEARCHRESULTS_INCATEGORY, "na categoria");
	//Search results "in" location
	define(LANG_SEARCHRESULTS_LOCATION, "em");
	//Search results "in" zip
	define(LANG_SEARCHRESULTS_ZIP, "no");
	//Search results "for" date
	define(LANG_SEARCHRESULTS_DATE, "para");
	//Search results - "Page" X
	define(LANG_SEARCHRESULTS_PAGE, "P�gina");
	//Recent Reviews
	define(LANG_RECENT_REVIEWS, "Avalia��es Recentes");
	//Reviews of
	define(LANG_REVIEWSOF, "Coment�rios para");
	//Reviews are disabled
	define(LANG_REVIEWDISABLE, "Avalia��es est�o desabilitadas");
	//View all categories
	define(LANG_ARTICLE_VIEWALLCATEGORIES, "Ver todas as categorias");
	//View all categories
	define(LANG_PROMOTION_VIEWALLCATEGORIES, "Ver todas as categorias");
	//Offer
	define(LANG_PROMOTION_OFFER, "Oferta");
	//Description
	define(LANG_PROMOTION_DESCRIPTION, "Descri��o");
	//Conditions
	define(LANG_PROMOTION_CONDITIONS, "Condi��es");
	//Location
	define(LANG_PROMOTION_LOCATIONS, "Localiza��o");
	//Item not found!
	define(LANG_MSG_NOTFOUND, "Item n�o encontrado!");
	//Item not available!
	define(LANG_MSG_NOTAVAILABLE, "Item n�o dispon�vel!");
	//Listing Search Results
	define(LANG_MSG_LISTINGRESULTS, "Resultados da Busca por estabelecimentos");
	//Promotion Search Results
	define(LANG_MSG_PROMOTIONRESULTS, "Resultados da Busca por Promo��es");
	//Event Search Results
	define(LANG_MSG_EVENTRESULTS, "Resultados da Busca por Eventos");
	//Classified Search Results
	define(LANG_MSG_CLASSIFIEDRESULTS, "Resultados da Busca por Classificados");
	//Article Search Results
	define(LANG_MSG_ARTICLERESULTS, "Resultados da Busca por Artigos");

	# ----------------------------------------------------------------------------------------------------
	# MEMBERS
	# ----------------------------------------------------------------------------------------------------
	//Enjoy our Services!
	define(LANG_ENJOY_OUR_SERVICES, "Aproveite nossos servi�os!");
	//Remove association with
	define(LANG_REMOVE_ASSOCIATION_WITH, "Remover rela��o com");
	//Welcome
	define(LANG_LABEL_WELCOME, "Bem-vindo(a)");
	//Member Options
	define(LANG_LABEL_MEMBER_OPTIONS, "S�cio - Op��es");
	//Back to Search
	define(LANG_LABEL_BACK_TO_SEARCH, "Voltar para a Busca");
	//Add New Account
	define(LANG_LABEL_ADD_NEW_ACCOUNT, "Adicionar Nova Conta");
	//Forgotten password
	define(LANG_LABEL_FORGOTTEN_PASSWORD, "Recupera��o de senha");
	//Click here
	define(LANG_LABEL_CLICK_HERE, "Clique aqui");
	//Help
	define(LANG_LABEL_HELP, "Ajuda");
	//Reset Password
	define(LANG_LABEL_RESET_PASSWORD, "Redefinir Senha");
	//Account and Contact Information
	define(LANG_LABEL_ACCOUNT_AND_CONTACT_INFO, "Informa��es de Conta e Contato");
	//Signup Notification
	define(LANG_LABEL_SIGNUP_NOTIFICATION, "Notifica��o de Cadastro");
	//Go to login
	define(LANG_LABEL_GO_TO_LOGIN, "Ir para a p�gina de acesso");
	//Order
	define(LANG_LABEL_ORDER, "Cadastro");
	//Check Out
	define(LANG_LABEL_CHECKOUT, "Pagamento");
	//Configuration
	define(LANG_LABEL_CONFIGURATION, "Configura��o");
	//Category Detail
	define(LANG_LABEL_CATEGORY_DETAIL, "Detalhes da Categoria");
	//Site Manager
	define(LANG_LABEL_SITE_MANAGER, "Administrador");
	//Summary page
	define(LANG_LABEL_SUMMARY_PAGE, "P�gina de Resumo");
	//Detail page
	define(LANG_LABEL_DETAIL_PAGE, "P�gina de Detalhe");
	//Photo Gallery
	define(LANG_LABEL_PHOTO_GALLERY, "Galeria de Fotos");
	//Add Banner
	define(LANG_LABEL_ADDBANNER, "Adicionar Banner");
	//Gallery Image Information
	define(LANG_LABEL_GALLERYIMAGEINFORMATION, "Informa��es da Imagem da Galeria");
	//Gallery Images
	define(LANG_LABEL_GALLERYIMAGES, "Imagens da Galeria");
	//Manage Gallery Images
	define(LANG_LABEL_MANAGEGALLERYIMAGES, "Gerenciar Imagens da Galeria");
	//Manage Galleries
	define(LANG_LABEL_MANAGEGALLERY_PLURAL, "Gerenciar Galerias");
	//Gallery does not exist!
	define(LANG_LABEL_GALLERYDOESNOTEXIST, "Galeria n�o existe!");
	//Gallery not available!
	define(LANG_LABEL_GALLERYNOTAVAILABLE, "Galeria indispon�vel!");
	//Custom Invoice Title
	define(LANG_LABEL_CUSTOM_INVOICE_TITLE, "T�tulo do Servi�o Adicional");
	//Custom Invoice Items
	define(LANG_LABEL_CUSTOM_INVOICE_ITEMS, "Itens do Servi�o Adicional");
	//Easy and Fast.
	define(LANG_LABEL_EASY_AND_FAST, "F�cil e R�pido.");
	//Steps
	define(LANG_LABEL_STEPS, "Passos");
	//Account Signup
	define(LANG_LABEL_ACCOUNT_SIGNUP, "Cadastro");
	//Select a Package
	define(LANG_LABEL_SELECT_PACKAGE, "Selecione um Pacote");
	//Payment Status
	define(LANG_LABEL_PAYMENTSTATUS, "Status do Pagamento");
	//Expiration
	define(LANG_LABEL_EXPIRATION, "Expira��o");
	//Add New Gallery
	define(LANG_LABEL_ADDNEWGALLERY, "Adicionar Nova Galeria");
	//Add a new gallery
	define(LANG_LABEL_ADDANEWGALLERY, "Adicionar uma nova galeria");
	//Add New Promotion
	define(LANG_LABEL_ADDNEWPROMOTION, "Adicionar Nova Promo��o");
	//Add a new promotion
	define(LANG_LABEL_ADDANEWPROMOTION, "Adicionar uma nova promo��o");
	//Manage Billing
	define(LANG_LABEL_MANAGEBILLING, "Gerenciar Faturas");
	//Click here if you have your password already.
	define(LANG_MSG_CLICK_IF_YOU_HAVE_PASSWORD, "Clique aqui se voc� j� tem sua senha.");
	//Not a member?
	define(LANG_MSG_NOT_A_MEMBER, "N�o � s�cio?");
	//for information on adding your item to
	define(LANG_MSG_FOR_INFORMATION_ON_ADDING_YOUR_ITEM, "para informa��o sobre o cadastro de seu item no");
	//Welcome to the Member Section
	define(LANG_MSG_WELCOME, "Bem-vindo(a) � Se��o S�cio");
	//"Account locked. Wait" X minute(s) and try again.
	define(LANG_MSG_ACCOUNTLOCKED1, "Conta bloqueada. Aguarde");
	//Account locked. Wait X "minute(s) and try again."
	define(LANG_MSG_ACCOUNTLOCKED2, "minuto(s) e tente novamente.");
	//Please, confirm your contact information before continue. One or more informations are required to directory works correctly.
	define(LANG_MSG_FOREIGNACCOUNTWARNING, "Por favor, confirme suas informa��es de contato antes de continuar. Uma ou mais informa��es s�o necess�rias para que o diret�rio funcione corretamente.");
	//You don't have access permission from this IP address!
	define(LANG_MSG_YOUDONTHAVEACCESSFROMTHISIPADDRESS, "Voc� n�o tem permiss�o de acesso neste endere�o IP!");
	//Sorry, your username or password is incorrect.
	define(LANG_MSG_USERNAME_OR_PASSWORD_INCORRECT, "Desculpe, seu usu�rio ou senha est� incorreto.");
	//Sorry, wrong account.
	define(LANG_MSG_WRONG_ACCOUNT, "Desculpe, conta errada.");
	//Sorry, wrong key.
	define(LANG_MSG_WRONG_KEY, "Desculpe, chave errada.");
	//OpenID Server not available!
	define(LANG_MSG_OPENID_SERVER, "O servidor do OpenID n�o est� dispon�vel!");
	//Error requesting OpenID Server!
	define(LANG_MSG_OPENID_ERROR, "Erro ao requisitar o servidor do OpenID!");
	//OpenID request canceled!
	define(LANG_MSG_OPENID_CANCEL, "Requisi��o do OpenID cancelada!");
	//Invalid OpenID Identity!
	define(LANG_MSG_OPENID_INVALID, "Identifica��o do OpenID inv�lida!");
	//Forgot your password?
	define(LANG_MSG_FORGOT_YOUR_PASSWORD, "Esqueceu sua senha?");
	//Account successfully updated!
	define(LANG_MSG_ACCOUNT_SUCCESSFULLY_UPDATED, "Conta atualizada com sucesso!");
	//Password successfully updated!
	define(LANG_MSG_PASSWORD_SUCCESSFULLY_UPDATED, "Senha atualizada com sucesso!");
	//"Thank you for signing up for an account in" [EDIRECTORY_TITLE]
	define(LANG_MSG_THANK_YOU_FOR_SIGNING_UP, "Obrigado por criar uma conta no");
	//Login to manage your account with the username and password below.
	define(LANG_MSG_LOGIN_TO_MANAGE_YOUR_ACCOUNT, "Utilize o usu�rio e senha abaixo para gerenciar sua conta.");
	//You can see
	define(LANG_MSG_YOU_CAN_SEE, "Voc� pode ver");
	//Your account in
	define(LANG_MSG_YOUR_ACCOUNT_IN, "Sua conta em");
	//"This [ITEM] will show" [UNLIMITED|the max of X] photos per gallery.
	define(LANG_MSG_ARTICLE_WILL_SHOW, "Este artigo mostrar�");
	//"This [ITEM] will show" [UNLIMITED|the max of X] photos per gallery.
	define(LANG_MSG_CLASSIFIED_WILL_SHOW, "Este classificado mostrar�");
	//"This [ITEM] will show" [UNLIMITED|the max of X] photos per gallery.
	define(LANG_MSG_EVENT_WILL_SHOW, "Este evento mostrar�");
	//"This [ITEM] will show" [UNLIMITED|the max of X] photos per gallery.
	define(LANG_MSG_LISTING_WILL_SHOW, "Este estabelecimento mostrar�");
	//This [ITEM] will show [UNLIMITED|"the max of" X] photos per gallery.
	define(LANG_MSG_THE_MAX_OF, "no m�ximo");
	//This [ITEM] will show [UNLIMITED|the max of X] "photos" per gallery.
	define(LANG_MSG_GALLERY_PHOTO, "fotos");
	//This [ITEM] will show [UNLIMITED|the max of X] "photos" per gallery.
	define(LANG_MSG_GALLERY_PHOTOS, "fotos");
	//This [ITEM] will show [UNLIMITED|the max of X] photos "per gallery."
	define(LANG_MSG_PER_GALLERY, "por galeria.");
	//or Associate an existing gallery with this article
	define(LANG_MSG_ASSOCIATE_EXISTING_GALLERY_WITH_ARTICLE, "ou Relacionar uma galeria existente com este artigo");
	//or Associate an existing gallery with this classified
	define(LANG_MSG_ASSOCIATE_EXISTING_GALLERY_WITH_CLASSIFIED, "ou Relacionar uma galeria existente com este classificado");
	//or Associate an existing gallery with this event
	define(LANG_MSG_ASSOCIATE_EXISTING_GALLERY_WITH_EVENT, "ou Relacionar uma galeria existente com este evento");
	//or Associate an existing gallery with this listing
	define(LANG_MSG_ASSOCIATE_EXISTING_GALLERY_WITH_LISTING, "ou Relacionar uma galeria existente com este estabelecimento");
	//Continue to pay for your article.
	define(LANG_MSG_CONTINUE_TO_PAY_ARTICLE, "Clique aqui para pagar por seu artigo");
	//Continue to pay for your banner.
	define(LANG_MSG_CONTINUE_TO_PAY_BANNER, "Clique aqui para pagar por seu banner");
	//Continue to pay for your classified.
	define(LANG_MSG_CONTINUE_TO_PAY_CLASSIFIED, "Clique aqui para pagar por seu classificado");
	//Continue to pay for your event.
	define(LANG_MSG_CONTINUE_TO_PAY_EVENT, "Clique aqui para pagar por seu evento");
	//Continue to pay for your listing.
	define(LANG_MSG_CONTINUE_TO_PAY_LISTING, "Clique aqui para pagar por seu estabelecimento");
	//Articles are activated by
	define(LANG_MSG_ARTICLES_ARE_ACTIVATED_BY, "Artigos s�o ativados pelo");
	//Banners are activated by
	define(LANG_MSG_BANNERS_ARE_ACTIVATED_BY, "Banners s�o ativados pelo");
	//Classifieds are activated by
	define(LANG_MSG_CLASSIFIEDS_ARE_ACTIVATED_BY, "classificados s�o ativados pelo");
	//Events are activated by
	define(LANG_MSG_EVENTS_ARE_ACTIVATED_BY, "Eventos s�o ativados pelo");
	//Listings are activated by
	define(LANG_MSG_LISTINGS_ARE_ACTIVATED_BY, "estabelecimentos s�o ativados pelo");
	//only after the process is complete.
	define(LANG_MSG_ONLY_PROCCESS_COMPLETE, "somente depois que o processo est� completo.");
	//Tips for the Item Map Tuning
	define(LANG_MSG_TIPSFORMAPTUNING, "Dicas para o Ajuste de Localiza��o");
	//You can adjust the position in the map,
	define(LANG_MSG_YOUCANADJUSTPOSITION, "Voc� pode ajustar a posi��o no mapa,");
	//with more accuracy.
	define(LANG_MSG_WITH_MORE_ACCURACY, "com mais exatid�o.");
	//Use the controls "+" and "-" to adjust the map zoom.
	define(LANG_MSG_USE_CONTROLS_TO_ADJUST, "Use os controles \"+\" e \"-\" para ajustar o zoom do mapa.");
	//Use the arrows to navigate on map.
	define(LANG_MSG_USE_ARROWS_TO_NAVIGATE, "Use as flechas para navegar no mapa.");
	//Drag-and-Drop the marker to adjust the location.
	define(LANG_MSG_DRAG_AND_DROP_MARKER, "Arraste e solte o marcador para ajustar a localiza��o.");
	//Your promotion will appear here
	define(LANG_MSG_PROMOTION_WILL_APPEAR_HERE, "Sua promo��o aparecer� aqui");
	//or Associate an existing promotion with this listing
	define(LANG_MSG_ASSOCIATE_EXISTING_PROMOTION, "ou relacionar uma promo��o existente com este estabelecimento");
	//No results found!
	define(LANG_MSG_NO_RESULTS_FOUND, "Nenhum resultado encontrado!");
	//Access not allowed!
	define(LANG_MSG_ACCESS_NOT_ALLOWED, "Acesso n�o permitido!");
	//The following problems were found
	define(LANG_MSG_PROBLEMS_WERE_FOUND, "Os seguintes problemas foram encontrados");
	//No items selected or requiring payment.
	define(LANG_MSG_NO_ITEMS_SELECTED_REQUIRING_PAYMENT, "Nenhum item selecionado ou requerendo pagamento.");
	//No items found.
	define(LANG_MSG_NO_ITEMS_FOUND, "Nenhum item encontrado.");
	//No invoices in the system.
	define(LANG_MSG_NO_INVOICES_IN_THE_SYSTEM, "N�o h� faturas no sistema.");
	//No transactions in the system.
	define(LANG_MSG_NO_TRANSACTIONS_IN_THE_SYSTEM, "N�o h� transa��es no sistema.");
	//Claim this Listing
	define(LANG_MSG_CLAIM_THIS_LISTING, "Solicite este estabelecimento");
	//Go to membros check out area
	define(LANG_MSG_GO_TO_MEMBERS_CHECKOUT, "Ir para a �rea de pagamento da se��o de s�cio");
	//You can see your invoice in
	define(LANG_MSG_YOU_CAN_SEE_INVOICE, "Voc� pode ver sua fatura em");
	//I agree to terms!
	define(LANG_MSG_AGREE_TO_TERMS, "Eu concordo com os termos de uso!");
	//and I will send payment!
	define(LANG_MSG_I_WILL_SEND_PAYMENT, "e vou enviar o pagamento!");
	//This page will redirect you to your member area in few seconds.
	define(LANG_MSG_THIS_PAGE_WILL_REDIRECT_YOU, "Esta p�gina redirecionar� voc� para a se��o de s�cio em alguns segundos.");
	//This page will redirect you to continue your signup process in few seconds.
	define(LANG_MSG_THIS_PAGE_WILL_REDIRECT_YOU_SIGNUP, "Esta p�gina redirecionar� voc� para continuar o processo de cadastro em alguns segundos.");
	//"If it doesn't work, please" click here
	define(LANG_MSG_IF_IT_DOES_NOT_WORK, "Se n�o funcionar, por favor,");
	//Manage Article
	define(LANG_MANAGE_ARTICLE, "Gerenciar Artigo");
	//Manage Banner
	define(LANG_MANAGE_BANNER, "Gerenciar Banner");
	//Manage Classified
	define(LANG_MANAGE_CLASSIFIED, "Gerenciar Classificados");
	//Manage Event
	define(LANG_MANAGE_EVENT, "Gerenciar Evento");
	//Manage Listing
	define(LANG_MANAGE_LISTING, "Gerenciar estabelecimento");
	//Manage Promotion
	define(LANG_MANAGE_PROMOTION, "Gerenciar Promo��o");
	//Manage Billing
	define(LANG_MANAGE_BILLING, "Gerenciar Fatura");
	//Manage Invoices
	define(LANG_MANAGE_INVOICES, "Gerenciar Faturas");
	//Manage Transactions
	define(LANG_MANAGE_TRANSACTIONS, "Gerenciar Transa��es");
	//No articles in the system.
	define(LANG_NO_ARTICLES_IN_THE_SYSTEM, "N�o h� artigos no sistema.");
	//No banners in the system.
	define(LANG_NO_BANNERS_IN_THE_SYSTEM, "N�o h� banners no sistema");
	//No classifieds in the system.
	define(LANG_NO_CLASSIFIEDS_IN_THE_SYSTEM, "N�o h� classificados no sistema.");
	//No events in the system. 
	define(LANG_NO_EVENTS_IN_THE_SYSTEM, "N�o h� eventos no sistema");
	//No galleries in the system.
	define(LANG_NO_GALLERIES_IN_THE_SYSTEM, "N�o h� galerias no sistema.");
	//No listings in the system.
	define(LANG_NO_LISTINGS_IN_THE_SYSTEM, "N�o h� estabelecimentos no sistema.");
	//No promotions in the system.
	define(LANG_NO_PROMOTIONS_IN_THE_SYSTEM, "N�o h� promo��es no sistema");
	//No Reports Available.
	define(LANG_NO_REPORTS, "Nenhum Relat�rio Dispon�vel.");
	//No article found. It might be deleted.
	define(LANG_NO_ARTICLE_FOUND, "Nenhum artigo encontrado. Ele pode ter sido removido.");
	//No classified found. It might be deleted.
	define(LANG_NO_CLASSIFIED_FOUND, "Nenhum classificado encontrado. Ele pode ter sido removido.");
	//No listing found. It might be deleted.
	define(LANG_NO_LISTING_FOUND, "Nenhum estabelecimento encontrada. Ela pode ter sido removida.");
	//Article Information
	define(LANG_ARTICLE_INFORMATION, "Informa��o do Artigo");
	//Delete Article
	define(LANG_ARTICLE_DELETE, "Remover Artigo");
	//Delete Article Information
	define(LANG_ARTICLE_DELETE_INFORMATION, "Remover Informa��es do Artigo");
	//Are you sure you want to delete this article
	define(LANG_ARTICLE_DELETE_CONFIRM, "Voc� tem certeza que deseja remover este artigo?");
	//Article Gallery
	define(LANG_ARTICLE_GALLERY, "Galeria do Artigo");
	//Article Preview
	define(LANG_ARTICLE_PREVIEW, "Visualizar Artigo");
	//Article Traffic Report
	define(LANG_ARTICLE_TRAFFIC_REPORT, "Relat�rio de Tr�fego do Artigo");
	//Article Detail
	define(LANG_ARTICLE_DETAIL, "Detalhes do Artigo");
	//Edit Article Information
	define(LANG_ARTICLE_EDIT_INFORMATION, "Editar Informa��es do Artigo");
	//Delete Banner
	define(LANG_BANNER_DELETE, "Remover Banner");
	//Delete Banner Information
	define(LANG_BANNER_DELETE_INFORMATION, "Remover Informa��es do Banner");
	//Are you sure you want to delete this banner?
	define(LANG_BANNER_DELETE_CONFIRM, "Voc� tem certeza que deseja remover este banner?");
	//Edit Banner
	define(LANG_BANNER_EDIT, "Editar Banner");
	//Edit Banner Information
	define(LANG_BANNER_EDIT_INFORMATION, "Editar Informa��o do Banner");
	//Banner Preview
	define(LANG_BANNER_PREVIEW, "Visualizar Banner");
	//Banner Traffic Report
	define(LANG_BANNER_TRAFFIC_REPORT, "Relat�rio de Tr�fego do Banner");
	//View Banner
	define(LANG_VIEW_BANNER, "Visualizar Banner");
	//Classified Information
	define(LANG_CLASSIFIED_INFORMATION, "Informa��o do Classificado");
	//Delete Classified
	define(LANG_CLASSIFIED_DELETE, "Remover Classificado");
	//Delete Classified Information
	define(LANG_CLASSIFIED_DELETE_INFORMATION, "Remover Informa��es do Classificado");
	//Are you sure you want to delete this classified
	define(LANG_CLASSIFIED_DELETE_CONFIRM, "Voc� tem certeza que deseja remover este classificado?");
	//Classified Gallery
	define(LANG_CLASSIFIED_GALLERY, "Galeria do Classificado");
	//Classified Map Tuning
	define(LANG_CLASSIFIED_MAP_TUNING, "Ajustar Localiza��o do Classificado");
	//Classified Preview
	define(LANG_CLASSIFIED_PREVIEW, "Visualizar Classificado");
	//Classified Traffic Report
	define(LANG_CLASSIFIED_TRAFFIC_REPORT, "Relat�rio de Tr�fego do Classificado");
	//Classified Detail
	define(LANG_CLASSIFIED_DETAIL, "Detalhes do Classificado");
	//Edit Classified Information
	define(LANG_CLASSIFIED_EDIT_INFORMATION, "Editar Informa��es do Classificado");
	//Edit Classified Level
	define(LANG_CLASSIFIED_EDIT_LEVEL, "Editar N�vel do Classificado");
	//Delete Event
	define(LANG_EVENT_DELETE, "Remover Evento");
	//Delete Event Information
	define(LANG_EVENT_DELETE_INFORMATION, "Remover Informa��es do Evento");
	//Are you sure you want to delete this event
	define(LANG_EVENT_DELETE_CONFIRM, "Voc� tem certeza que deseja remover este evento?");
	//Event Information
	define(LANG_EVENT_INFORMATION, "Informa��es do Evento");
	//Event Gallery
	define(LANG_EVENT_GALLERY, "Galeria do Evento");
	//Event Map Tuning
	define(LANG_EVENT_MAP_TUNING, "Ajustar Localiza��o do Evento");
	//Event Preview
	define(LANG_EVENT_PREVIEW, "Visualizar Evento");
	//Event Traffic Report
	define(LANG_EVENT_TRAFFIC_REPORT, "Relat�rio de Tr�fego do Evento");
	//Event Detail
	define(LANG_EVENT_DETAIL, "Detalhes do Evento");
	//Edit Event Information
	define(LANG_EVENT_EDIT_INFORMATION, "Editar Informa��es do Evento");
	//Listing Gallery
	define(LANG_LISTING_GALLERY, "Galeria do estabelecimento");
	//Listing Information
	define(LANG_LISTING_INFORMATION, "Informa��es do estabelecimento");
	//Listing Map Tuning
	define(LANG_LISTING_MAP_TUNING, "Ajustar Localiza��o do estabelecimento");
	//Listing Preview
	define(LANG_LISTING_PREVIEW, "Visualizar estabelecimento");
	//Listing Promotion
	define(LANG_LISTING_PROMOTION, "Promo��o do estabelecimento");
	//The promotion is linked from the listing.
	define(LANG_LISTING_PROMOTION_IS_LINKED, "A promo��o � acessada a partir do estabelecimento");
	//To be active the promotion
	define(LANG_LISTING_TO_BE_ACTIVE_PROMOTION, "Para estar ativa a promo��o");
	//must have an end date in the future
	define(LANG_LISTING_END_DATE_IN_FUTURE, "deve ter uma data de t�rmino no futuro");
	//must be associated with a listing
	define(LANG_LISTING_ASSOCIATED_WITH_LISTING, "deve estar relacionada com um estabelecimento");
	//Listing Traffic Report
	define(LANG_LISTING_TRAFFIC_REPORT, "Relat�rio de Tr�fego do estabelecimento");
	//Listing Detail
	define(LANG_LISTING_DETAIL, "Detalhes do estabelecimento");
	//for listing
	define(LANG_LISTING_FOR_LISTING, "para o estabelecimento");
	//Listing Update
	define(LANG_LISTING_UPDATE, "Editar estabelecimento");
	//Delete Promotion
	define(LANG_PROMOTION_DELETE, "Remover Promo��o");
	//Delete Promotion Information
	define(LANG_PROMOTION_DELETE_INFORMATION, "Remover Informa��es da Promo��o");
	//Are you sure you want to delete this promotion
	define(LANG_PROMOTION_DELETE_CONFIRM, "Voc� tem certeza que deseja remover esta promo��o?");
	//Promotion Preview
	define(LANG_PROMOTION_PREVIEW, "Visualizar Promo��o");
	//Promotion Information
	define(LANG_PROMOTION_INFORMATION, "Informa��es da Promo��o");
	//Promotion Detail
	define(LANG_PROMOTION_DETAIL, "Detalhes da Promo��o");
	//Edit Promotion Information
	define(LANG_PROMOTION_EDIT_INFORMATION, "Editar Informa��es da Promo��o");
	//Delete Gallery
	define(LANG_GALLERY_DELETE, "Remover Galeria");
	//Delete Gallery Information
	define(LANG_GALLERY_DELETE_INFORMATION, "Remover Informa��o da Galeria");
	//Are you sure you want to delete this gallery? This will remove all gallery information, photos and relationships.
	define(LANG_GALLERY_DELETE_CONFIRM, "Voc� tem certeza que deseja remover esta galeria? Todas as informa��es da galeria, fotos e relacionamentos ser�o removidos.");
	//Delete Gallery Image
	define(LANG_GALLERY_IMAGE_DELETE, "Remover Imagem da Galeria");
	//Gallery Information
	define(LANG_GALLERY_INFORMATION, "Informa��es da Galeria");
	//Gallery Preview
	define(LANG_GALLERY_PREVIEW, "Visualizar Galeria");
	//Gallery Detail
	define(LANG_GALLERY_DETAIL, "Detalhes da Galeria");
	//Edit Gallery Information
	define(LANG_GALLERY_EDIT_INFORMATION, "Editar informa��es da Galeria");
	//Manage Images
	define(LANG_GALLERY_MANAGE_IMAGES, "Gerenciar Imagens");
	//Delete Image
	define(LANG_IMAGE_DELETE, "Remover Imagem");
	//Image successfully deleted!
	define(LANG_IMAGE_SUCCESSFULLY_DELETED, "Imagem removida com sucesso!");
	define(LANG_CLIENT_SUCCESSFULLY_DELETED, "Cliente removido com sucesso!");
	
	//Review Detail
	define(LANG_REVIEW_DETAIL, "Detalhes da Avalia��o");
	//Review Preview
	define(LANG_REVIEW_PREVIEW, "Visualizar Avalia��o");
	//Invoice Detail
	define(LANG_INVOICE_DETAIL, "Detalhes da Fatura");
	//Invoice not found for this account.
	define(LANG_INVOICE_NOT_FOUND_FOR_ACCOUNT, "Fatura n�o encontrada para esta conta.");
	//Invoice Notification
	define(LANG_INVOICE_NOTIFICATION, "Notifica��o de Fatura");
	//Transaction Detail
	define(LANG_TRANSACTION_DETAIL, "Detalhes da Transa��o");
	//Transaction not found for this account.
	define(LANG_TRANSACTION_NOT_FOUND_FOR_ACCOUNT, "Transa��o n�o encontrada para esta conta.");

?>
