import random;

template = "INSERT INTO `player_info` (`p_id`, `p_name`, `p_phone`, `p_pace`, `p_dribble`, `p_shooting`, `p_defense`, `p_passing`, `p_physic`, `current_club`, `p_position`) VALUES ('2165', 'Alex Cool', '05665265414', '69', '71', '50', '88', '67', '75', 'Abahoni', 'ST')";
unique_p_id = [];
names = [ "Jayce","Black","Jayden","Massey","Bradley","Hess","Helen","Gonzalez","Hayle","Griffin","Valeria","Bell","Grayson","Bryan","Mylee", "Sharp","Sergio", "Silva","Lindsey", "Zuniga","Martin","Dodson","Teagan" ,"Price"];
position = ["ST", "CF", "RW", "LW", "CAM", "CM", "CDM", "CB", "RB", "LB", "GK"];
clubs = ["mohamedan","abahoni","sheikh rasel","sheikh jamal","muktijoddha sks", "bashundhara kings"]
super_template = "INSERT INTO `player_info` (`p_id`, `p_name`, `p_phone`, `p_pace`, `p_dribble`, `p_shooting`, `p_defense`, `p_passing`, `p_physic`, `current_club`, `p_position`) VALUES ('1452', 'mess black', '01515454', '78', '65', '77', '81', '98', '82', 'abahoni', 'CR'), ('1543', 'george shronge', '01545748', '78', '68', '59', '89', '68', '58', 'Mohamedan', 'RW');"

main_query = "";
for i in range(120):
    p_id       = random.randint(1000, 9999);
    p_name     = random.choice(names) +" "+ random.choice(names);
    p_phone    = random.randint(10000000000, 99999999999);
    p_pace     = random.randint(50, 99);
    p_dribble  = random.randint(50, 99);
    p_shooting = random.randint(50, 99);
    p_defense  = random.randint(50, 99);
    p_passing  = random.randint(50, 99);
    p_phiysic  = random.randint(50, 99);
    current_club = random.choice(clubs);
    p_position = random.choice(position);
    main_query += template.replace("2165", str(p_id)).replace("Alex Cool", p_name).replace("05665265414", str(p_phone)).replace("69", str(p_pace)).replace("71", str(p_dribble)).replace("50", str(p_shooting)).replace("88", str(p_defense)).replace("67", str(p_passing)).replace("75", str(p_phiysic)).replace("Abahoni", current_club).replace("ST", p_position) + ";";
print(main_query);