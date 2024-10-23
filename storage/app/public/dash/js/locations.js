var map;
function initMap() { }
function showLocation(county) { }

function showSubCounties(county) {
      var subCounties = {
            "Baringo": [],
            "Bomet": [],
            "Bungoma": [],
            "Busia": [],
            "Elgeyo Marakwet": [],
            "Embu": ["Manyatta", "Mbeere North", "Mbeere South", "Runyenjes"],
            "Garissa": [],
            "Homa Bay": [],
            "Isiolo": [],
            "Kajiado": ["Kajiado Central", "Kajiado East", "Kajiado North", "Kajiado South", "Kajiado West"],
            "Kakamega": ["Select", "Lukuyani"],
            "Kericho": ["Ainamoi", "Belgut", "Bureti", "Kipkelion East", "Kipkelion West", "Sigowet/Soin"],
            "Kiambu": ["Gatundu North", "Gatundu South", "Githunguri", "Juja", "Kabete", "Kiambaa", "Kiambu", "Kikuyu", "Lari", "Limuru", "Ruiru", "Thika"],
            "Kilifi": ["Ganze", "Kaloleni", "Kilifi North", "Kilifi South", "Magarini", "Malindi", "Rabai"],
            "Kirinyaga": ["Gichugu", "Kirinyaga Central", "Ndia", "Mwea"],
            "Kisii": [],
            "Kisumu": ["Kisumu West", "Kisumu Central", "Kisumu East", "Seme", "Muhoroni", "Nyando", "Nyakach"],
            "Kitui": [],
            "Kwale": [],
            "Laikipia": ["Laikipia East", "Laikipia West", "Laikipia North"],
            "Lamu": ["Lamu East", "Lamu West"],
            "Machakos": ["Kangundo", "Kathiani", "Machakos Town", "Mavoko", "Masinga", "Matungulu", "Mwala", "Yatta"],
            "Makueni": ["Kaiti", "Kibwezi East", "Kibwezi West", "Kilome", "Makueni", "Mbooni"],
            "Mandera": [],
            "Meru": [],
            "Migori": [],
            "Marsabit": [],
            "Mombasa": ["Changamwe", "Jomvu", "Kisauni", "Likoni", "Mvita", "Nyali"],
            "Murang'a": ["Gatanga", "Kandara", "Kangema", "Kiharu", "Kigumo", "Mathioya", "Maragwa"],
            "Nairobi": ["Dagoretti North", "Dagoretti South", "Embakasi Central", "Embakasi East", "Embakasi North", "Embakasi South", "Embakasi West", "Kamukunji", "Kasarani", "Kibra", "Langata", "Makadara", "Mathare", "Ruaraka", "Roysambu", "Starehe", "Westlands"],
            "Nakuru": ["Bahati", "Gilgil", "Kuresoi North", "Kuresoi South", "Molo", "Naivasha", "Nakuru Town East", "Nakuru Town West", "Njoro", "Rongai", "Subukia"],
            "Nandi": [],
            "Narok": [],
            "Nyamira": [],
            "Nyandarua": ["Kinangop", "Kipipiri", "Ol Joro Orok", "Ol Kalou", "Ndaragua"],

            "Nyeri": ["Tetu", "Kieni", "Mathira", "Othaya", "Mukurweini", "Nyeri Town"],

            "Samburu": [],
            "Siaya": [],
            "Taita Taveta": [],
            "Tana River": [],
            "Tharaka Nithi": [],
            "Trans Nzoia": ["Cherangany", "Endebes", "Kiminini", "kitale", "Kwanza", "Saboti"],
            "Turkana": [],
            "Uasin Gishu": ["Ainabkoi", "Eldoret", "Kapseret", "Keses", "Moiben", "Soy", "Turbo"],
            "Vihiga": [],
            "Wajir": [],
            "West Pokot": [],

      };

      var subCountySelect = document.getElementById("sub_county_select");
      subCountySelect.options.length = 0;
      subCounties[county].forEach(function (subCounty) {
            var option = document.createElement("option");
            option.value = subCounty;
            option.text = subCounty;
            subCountySelect.add(option);
      });

      //showLocation(county);
}

function showWards(subCounty) {
      var wards = {
            "Dagoretti North": ["Kabiro", "Kwangware", "Kileleshwa", "Kilimani", "Gatina"],
            "Dagoretti South": ["Mutu-ini", "Ngando", "Riruta", "Waithaka"],
            "Embakasi Central": ["Kayole Central", "Kayole North", "Kayole South", "Komarock", "Matopeni / Spring valey"],
            "Embakasi East": ["Embakasi South", "Lower Savanna", "Mihang'o", "Upper Savanna", "Utawala"],
            "Embakasi North": ["Dandora Area 1", "Dandora Area 2", "Dandora Area 3", "Dandora Area 4", "Kariobangi North"],
            "Embakasi South": ["Imara Daima", "Kwa Njenga", "Kwa Reuben", "Kware", "Pipeline"],
            "Embakasi West": ["Kariobangi South", "Mowlem", "Umoja 1", "Umoja 2"],
            "Kamukunji": ["Airbase South", "California South", "Eastleigh North", "Pumwani"],
            "Kasarani": ["Clay City", "Mwiki", "Njiru", "Ruai"],
            "Kibra": ["Laini Saba", "Lindi", "Makina", "Sarangombe", "Woodley/Kenyatta Golf Course"],
            "Langata": ["Highrise", "Karen", "Nairobi West", "Mugumoini", "South C"],
            "Makadara": ["Makongeni South", "Maringo", "Viwandani"],
            "Mathare": ["Huruma", "Kiamaiko", "Mabatini", "Mlango Kubwa", "Ngei"],
            "Ruaraka": ["Babadogo", "Korogocho", "Lucky Summer", "Mathare North", "Utalii"],
            "Roysambu": ["Githurai", "Kahawa", "Kahawa West", "Roysambu", "Zimmerman"],
            "Starehe": ["Landimawe", "Nairobi South", "Nairobi Hospital", "Ziwani/Kariokor"],
            "Westlands": ["Kangemi", "Karura", "Kitisuru", "Mountain View", "Parklands/Highridge"],

            //nyeri county
            "Tetu": ["Aguthi-Gaaki", "Dedan Kimathi", "Wamagana"],
            "Kieni": ["Dedan Kimathi", "Gakawa", "Gatarakwa", "Kabaru", "Mugunda", "Mweiga", "Mwiyogo/EndaraSha", "Naromoro Kiamuthaga", "Thegu River", "Wamagana"],
            "Mathira": ["Iriani", "Karatina Town", "Kirimukuyu", "Konyu", "Magutu", "Ruguru"],
            "Othaya": ["Chinga", "Iria-ini", "Karima", "Mahiga"],
            "Mukurweini": ["Gikondi", "Rugi", "Mukurwe-ini West", "Mukurwe-ini Central"],
            "Nyeri Town": ["Kiganjo/Mathari", "Rware", "Gatitu/Muruguru", "Ruring’u", "Kamakwa/Mukaro"],

            //Kiambu county
            "Gatundu South": ["Kiamwangi Ward", "Kiganjo Ward", "Ndarugo Ward", "Ngenda Ward"],
            "Gatundu North": ["Gituamba Ward", "Githobokoni Ward", "Chania Ward", "Mang’u Ward"],
            "Juja": ["Murera Ward", "Theta Ward", "Juja Ward", "Witeithie Ward", "Kalimoni Ward"],
            "Thika": ["Gatuanyaga Ward", "Hospita Ward", "Kamenu Ward", "Township Ward"],
            "Ruiru": ["Biashara", "Gatongora", "Gitothua", "Kahawa/Sukari", "Kahawa Wendani", "Kiuu", "Mwiki", "Mwihoko 1"],
            "Githunguri": ["Githiga", "Githunguri", "Ikinu", "Komothai 3", "Ngewa"],
            "Kiambu": ["Ndumberi 3", "Riabai", "Ting’ang’a", "Township"],
            "Kiambaa": ["Cianda", "Karuri", "Ndenderu", "Muchatha", "Kihara"],
            "Kabete": ["Gitaru", "Muguga", "Nyathuna", "Kabete", "Uthiru"],
            "Kikuyu": ["Karai", "Nachu", "Sigona", "Kikuyu", "Kinoo"],
            "Limuru": ["Bibirioni", "Limuru Central", "Limuru East", "Ndeiya", "Ngecha Tigoni"],
            "Lari": ["Kinale", "Kijabe", "Nyanduma", "Kamburu", "Lari/Kirenga"],

            //kirinyaga county
            "Gichugu": ["Gathigiriri", "Kangai", "Mutithi", "Murindiko", "Nyangati", "Teberere", "Wamumu"],
            "Kirinyaga Central": ["Kabare Baragwi", "Karumandi", "Ngariama", "Njukiini"],
            "Mwea": ["Kariti", "Kiine", "Mukure"],
            "Ndia": ["Inoi", "Kanuekini", "Kerugoya", "Mutira"],

            //nyandarua
            "Kinangop": ["Engineer", "Gathara", "Githabai", "Magumu", "Murungaro", "North Kinangop", "Njabini/Kibiru", "Nyakio"],
            "Kipipiri": ["Geta", "Githioro", "Kipipiri", "Wanjohi"],
            "Ol Joro Orok": ["Charagita", "Gathanji", "Gatimu", "Weru"],
            "Ol Kalou": ["Karau", "Kaimbaga", "Kanjuire Ridge", "Milangine", "Rurii"],
            "Ndaragua": ["Central", "Kiriita", "Leshau/Pondo", "Shamata"],

            //Nakuru
            "Bahati": ["Bahati", "Dundori", "Kabatini", "Kiamaina", "Lanet/Umoja"],
            "Gilgil": ["Barut", "Elementaita", "Gilgil", "Malewa West", "Mbaruk/Eburu", "Murindati"],
            "Kuresoi North": ["Amalo", "Kamara", "Kiptororo", "Nyota", "Sirikwa"],
            "Kuresoi South": ["Amalo", "Keringet", "Kiptagich", "Tinet"],
            "Molo": ["Elburgon", "Mariashoni", "Molo", "Turi"],
            "Naivasha": ["Biashara", "Hells Gate", "Lake View", "Maiella", "Mai Mahiu", "Naivasha East", "Olkaria", "Viwandani"],
            "Nakuru Town West": ["Barut", "Kapkures", "Kaptembwo", "London", "Rhoda", "Shabaab"],
            "Nakuru Town East": ["Biashara", "Flamingo", "Kivumbini", "Menengai", "Nakuru East"],
            "Njoro": ["Kihingo", "Lare", "Mau Narok", "Mauche", "Nessuit", "Njoro"],
            "Rongai": ["Menengai", "Mosop", "Solai", "Visoi", "WesSoint"],
            "Subukia": ["Kabazi", "Subukia", "Waseges"],

            //muranga
            "Gatanga": ["Ithanga", "Kakuzi/Mitumbiri", "Kihumbu-ini", "Mugumo-ini"],
            "Kandara": ["Gaichanjiru", "Ithiru", "Kangundu-ini", "Muruka", "Ng’araria", "Ruchu"],
            "Kangema": ["Kanyenya-ini", "Muguru", "Rwathia"],
            "Kiharu": ["Gaturi", "Mbiri", "Mugoiri", "Murarandia", "Township", "Wangu"],
            "Kigumo": ["Kahumbu", "Kangari", "Kigumo", "Kinyona", "Muthithi"],
            "Mathioya": ["Kamacharia", "Kituhi", "Kiiru"],
            "Maragwa": ["Ichagaki", "Kamahuha", "Kambiti", "Kimorori/Wempa", "Makuyu", "Nginda"],

            //mombasa
            "Changamwe": ["Airport", "Chaani", "Changamwe", "Kipevu", "Port Reitz"],
            "Jomvu": ["Jomvu Kuu", "Mikindani", "Miritini"],
            "Kisauni": ["Bamburi", "Junda", "Magogoni", "Mjambere", "Mtopanga", "Mwakirunge", "Shanzu"],
            "Likoni": ["Bofu", "Likoni", "Mtongwe", "Shika Adabu", "Timbwani"],
            "Mvita": ["Majengo Ganjoni/Shimanzi", "Mji wa Kale/Makadara", "Tononoka", "Todor"],
            "Nyali": ["Frere Town", "Kadzandani", "Kongowea", "Mkomani", "Ziwa la Ngombe"],

            //kilifi

            "Ganze": ["Bamba", "Ganze", "Jaribuni", "Sokoke"],
            "Kaloleni": ["Kaloleni", "Kayafungo", "Mariakani", "Mwanamwinga"],
            "Kilifi North": ["Dabaso", "Kibarani", "Matsangoni", "Mnarani", "Sokoni", "Tezo", "Watamu"],
            "Kilifi South": ["Chasimba", "Junju", "Mtepeni", "Mwarakaya", "Shimo la Tewa"],
            "Magarini": ["Adu", "Garashi", "Gongoni", "Magarini", "Maarafa", "Sabaki"],
            "Malindi": ["Ganda", "Jilore", "Kakuyuni", "Malindi Town", "Shella"],
            "Rabai": ["Kambe-Ribe", "Mwawesa", "Rabai/Kisurutuni", "Ruruma"],
            //machakos

            "Kangundo": ["Kangundo Central", "Kangundo East", "Kangundo North", "Kangundo West"],
            "Kathiani": ["Kathiani Central", "Lower Kaewa/Kaani", "Mitaboni", "Upper Kaewa/Iveti"],
            "Machakos Town": ["Kalama", "Kola", "Machakos Central", "Mua", "Mumbuni North", "Mutitini", "Muvuti/Kiima-Kimwe"],
            "Mavoko": ["Athi River", "Kinanie", "Muthwani", "Syokimau/Mlolongo"],
            "Masinga": ["Central", "Ekalakala", "Kivaa", "Masinga", "Muthesya", "Ndithini"],
            "Matungulu": ["Kyeleni", "Matungulu East", "Matungulu North", "Matungulu West", "Tala"],
            "Mwala": ["Kibauni", "Makutano/Mwala", "Masii", "Mbiuni", "Muthetheni", "Wamunyu"],
            "Yatta": ["Ikomba", "Katangi", "Kithimani", "Matuu", "Ndalani"],

            //Kajiado

            "Kajiado Central": ["Dalalekutuk", "Ildamat", "Matapato North", "Matapato South", "Purko"],
            "Kajiado East": ["Imaroror", "Kaputiei North", "Kenyawa-Poka", "Kitengela", "Oloosirkon/Sholinke"],
            "Kajiado North": ["Ngong", "Nkaimurunya", "Olkeri", "Oloolua", "Ongata Rongai"],
            "Kajiado South": ["Entonet/Lenkisi", "Keikuku", "Kimana", "Mbirikani/Eselen", "Rombo"],
            "Kajiado West": ["Ewuaso Oonkidong’i", "Iloodokilani", "Keekonyokie", "Magadi", "Mosiro"],
            //embu

            "Manyatta": ["Gaturi South", "Kithimu", "Kirimari", "Mbeti North", "Nginda", "Ruguru/Ngandori"],
            "Mbeere North": ["Evurore", "Muminji", "Nthawa"],
            "Mbeere South": ["Amakim", "Kiambere", "Mavuria", "Mbeti South", "Mwea"],
            "Runyenjes": ["Central Ward", "Gaturi North", "Kaagari North", "Kaagari South", "Kyeni North", "Kyeni South"],
            //Lamu

            "Lamu East": ["Basuba", "Faza", "Kiunga"],
            "Lamu West": ["Bahari", "Hindi", "Hongwe", "Mkomani", "Mkunumbi", "Shella", "Witu"],

            //Transzoia County

            "Cherangany": ["Chepsiro/Kiptoror", "Cherangany/Suwerwa", "Kaplamai", "Makutano", "Motosiet", "Sinyerere", "Sitatunga"],
            "Endebes": ["Chepchoina", "Endebess", "Matumbei"],
            "Kiminini": ["Hospital", "Kiminini", "Nabiswa", "Sikhendu", "Sirende", "Waitaluk"],
            "kitale": ["kitale"],
            "Kwanza": ["Bidii", "Keiyo", "Kapomboi", "Kwanza"],
            "Saboti": ["Kinyoro", "Machewa", "Matisi", "Saboti", "Tuwani"],

            //Makueni

            "Kaiti": ["Ilima", "Kee", "Kilungu", "Ukia"],
            "Kibwezi East": ["Ivingoni/Nzambani", "Masongaleni", "Mtito Andei", "Thange"],
            "Kibwezi West": ["Emali/Mulala", "Kikumbulyu North", "Kikumbulyu South", "Makindu", "Nguu/Masumba", "Nguumo"],
            "Kilome": ["Kalanzoni/Kiima Kiu", "Kasikeu", "Mukaa"],
            "Makueni": ["Kathonzweni", "Kitise/Kithuki", "Mavindini", "Mbitini", "Muvau/Kikuumini", "Nzau/Kilili/Kalamba", "Wote"],
            "Mbooni": ["Kalawa", "Kithungo/Kitundu", "Kiteta/Kisau", "Mbooni", "Tulimani", "Waia-Kako"],

            //Kericho
            "Ainamoi": ["Ainamoi", "Kapkugerwet", "Kapsoit", "Kipchebor", "Kipchimchim", "Kapsaos"],
            "Belgut": ["Cheptororiet/Seretut", "Chaik", "Kabianga", "Kapsuser", "Waldai"],
            "Bureti": ["Cheboin", "Chemosot", "Cheplanget", "Kapkatet", "Kisiara", "Litein", "Tebesonik"],
            "Kipkelion East": ["Chepseon", "Kedowa/Kimugul", "Londiani", "Tendeno/Sorget"],
            "Kipkelion West": ["Chilchila", "Kamasian", "Kipkelion", "Kunyak"],
            "Sigowet/Soin": ["Kaplelartet", "Sigowet", "Soin", "Soliat"],

            //uasin gishu

            "Ainabkoi": ["Ainabkoi/Olare", "Kapsoya", "Kaptagat"],
            "Eldoret": ["Eldoret"],
            "Kapseret": ["Langas", "Kipkenyo", "Megun", "Ngeria", "Simat/Kapseret"],
            "Keses": ["Cheptiret/Kipchamo", "Racecourse", "Tarakwa", "Tulwet/Chuiyat"],
            "Moiben": ["Karuna/Meibeki", "Kimumu", "Moiben", "Sergoit", "Tembelio"],
            "Soy": ["Kapsuswa/Kuinet", "Kapkures", "Moi's Bridge", "Segero/Barsombe", "Soy", "Ziwa", "Kipsomba"],
            "Turbo": ["Huruma", "Kapsaos", "Kamagut", "Kiplombe", "Ngenyilel", "Tapsagoi"],

            //Laikipia County

            "Laikipia East": ["Ngobit", "Tigithi", "Thingithu", "Nanyuki", "Umande"],
            "Laikipia West": ["Olmoran", "Rumuruti Township", "Githiga", "Marmanet", "Igwamiti", "Salama"],
            "Laikipia North": ["Mukogodo East", "Mukogodo West", "Segera", "Sosian"],


            //kisumu county
            "Kisumu West": ["South West Kisumu", "Central Kisumu", "Kisumu North", "West Kisumu", "North West Kisumu"],
            "Kisumu Central": ["Raliways", "Migosi", "Shaurimoyo", "Kaloleni", "Market Milimani", "Kondele", "Nyalenda B", ""],
            "Kisumu East": ["Kajulu", "Kolwa East", "Manyatta B", "Nyalenda A", "Kolwa Central"],
            "Seme": ["West Seme", "Central Seme", "East Seme", "North Seme"],
            "Nyando": ["East Kano", "Awasi/Onjiko", "Ahero", "Kabonyo/Kanyag Wal", "Kobura"],
            "Muhoroni": ["Miwani", "Ombeyi", "Masogo/Nyang’oma", "Chemelil/Muhoroni", "Koru"],
            "Nyakach": ["South East Nyakach", "West Nyakach", "North Nyakach", "Central Nyakach", "South West Nyakach"],

            //kakamega county
            "Lukuyani": ["Nzoia"],

            // Add more sub-counties and their wards here
      };

      var wardSelect = document.getElementById("ward_select");
      wardSelect.options.length = 0;
      wards[subCounty].forEach(function (ward) {
            var option = document.createElement("option");
            option.value = ward;
            option.text = ward;
            wardSelect.add(option);
      });

      showLocation(subCounty);
}

var x = document.getElementById("latitude");
var x2 = document.getElementById("longitude");

function getLocation() {
      console.log(position.coords.longitude);
      if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPositionLongitude);
            navigator.geolocation.getCurrentPosition(showPositionLatitude);
      } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
      }
}

function showPositionLongitude(position) {
      x.innerHTML = position.coords.longitude;
}

function showPositionLatitude(position) {
      x2.innerHTML = position.coords.latitude;
}
