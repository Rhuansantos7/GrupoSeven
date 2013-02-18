if (!window.lib) { window.lib = {}; }

var p; // shortcut to reference prototypes

// stage content:
(lib.animaçãonotas = function(mode,startPosition,loop) {
if (loop == null) { loop = false; }	this.initialize(mode,startPosition,loop,{},true);

	// slogan
	this.instance = new lib.slogan();
	this.instance.setTransform(1019.3,124.5,1,1,0,0,0,174,96.5);
	this.instance.alpha = 0;
	this.instance._off = true;

	this.timeline.addTween(Tween.get(this.instance).wait(268).to({_off:false},0).to({alpha:1},48).wait(1));

	// logo
	this.instance_1 = new lib.logo();
	this.instance_1.setTransform(644.3,114.8,1,1,0,0,0,229,114.5);
	this.instance_1.alpha = 0;

	this.timeline.addTween(Tween.get(this.instance_1).wait(134).to({alpha:1},142).wait(41));

	// Camada 64 Cópia
	this.instance_2 = new lib.nota10();
	this.instance_2.setTransform(2148.5,169.2,0.936,0.936,15,0,0,26.9,33.5);
	this.instance_2.alpha = 0.1;
	this.instance_2.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_2).to({scaleX:0.73,scaleY:0.73,rotation:-15.6,x:901.8,y:-129.6},276).to({scaleX:0.7,scaleY:0.7,rotation:-20,regX:26.8,x:721,y:-173,alpha:0},40).wait(1));

	// Camada 63 Cópia
	this.instance_3 = new lib.nota9();
	this.instance_3.setTransform(2060.2,110,0.649,0.649,-5.2,0,0,32.6,28.6);
	this.instance_3.alpha = 0.1;
	this.instance_3.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_3).to({scaleX:1.2,scaleY:1.2,rotation:-5.3,x:750.4,y:-101.8},276).to({scaleX:1.28,scaleY:1.28,rotation:-5.5,regX:32.5,x:560.5,y:-132.6,alpha:0},40).wait(1));

	// Camada 62 Cópia
	this.instance_4 = new lib.nota9();
	this.instance_4.setTransform(1958.7,180.2,0.858,0.858,6.5,0,0,32.3,28.7);
	this.instance_4.alpha = 0.1;
	this.instance_4.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_4).to({scaleX:1.29,scaleY:1.29,rotation:-3.6,x:780.9,y:232.4},276).to({scaleX:1.36,scaleY:1.36,rotation:-5.2,regX:32.4,regY:28.8,x:610.2,y:240,alpha:0},40).wait(1));

	// Camada 61 Cópia
	this.instance_5 = new lib.nota9();
	this.instance_5.setTransform(1941,189.9,1.211,1.211,8.7,0,0,32.4,28.6);
	this.instance_5.alpha = 0.1;
	this.instance_5.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_5).to({scaleX:1.88,scaleY:1.88,rotation:-42.4,x:992.2,y:157.8},276).to({scaleX:1.98,scaleY:1.98,rotation:-49.8,regY:28.7,x:854.5,y:153,alpha:0},40).wait(1));

	// Camada 47 Cópia
	this.instance_6 = new lib.nota3();
	this.instance_6.setTransform(1323,-19.5,1,1,15,0,0,5.3,18.2);
	this.instance_6.alpha = 0.1;
	this.instance_6.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_6).to({scaleX:1,scaleY:1,rotation:-15.6,regY:18.1,x:181.6,y:226.1},276).to({scaleX:1,scaleY:1,rotation:-20,regY:18.2,x:16.1,y:261.8,alpha:0},40).wait(1));

	// Camada 48 Cópia
	this.instance_7 = new lib.nota4();
	this.instance_7.setTransform(1848.3,62.3,1.747,1.747,29.8,0,0,7.5,22);
	this.instance_7.alpha = 0.1;
	this.instance_7.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_7).to({scaleX:2.15,scaleY:2.15,rotation:-0.6,x:800.3,y:-138.8},276).to({scaleX:2.21,scaleY:2.21,rotation:-5.2,regX:7.4,x:648.4,y:-168.2,alpha:0},40).wait(1));

	// Camada 65 Cópia
	this.instance_8 = new lib.Interpolar30("synched",0);
	this.instance_8.setTransform(3789.5,643.6,2.157,2.157,15);
	this.instance_8.alpha = 0.1;

	this.timeline.addTween(Tween.get(this.instance_8).to({scaleX:3.88,scaleY:3.88,rotation:-15.6,x:3411.3,y:-614.9},276).to({scaleX:4.13,scaleY:4.13,rotation:-20,x:3356.5,y:-797.2,alpha:0},40).wait(1));

	// Camada 49 Cópia
	this.instance_9 = new lib.Interpolar30("synched",0);
	this.instance_9.setTransform(1825.9,129.1,1,1,15);
	this.instance_9.alpha = 0.1;

	this.timeline.addTween(Tween.get(this.instance_9).to({scaleX:1,scaleY:1,rotation:-15.6,x:288.2,y:257.5},276).to({scaleX:1,scaleY:1,rotation:-20,x:65.3,y:276.1,alpha:0},40).wait(1));

	// Camada 50 Cópia
	this.instance_10 = new lib.nota4();
	this.instance_10.setTransform(1569.9,52.8,1.97,1.97,18,0,0,7.5,22);
	this.instance_10.alpha = 0.1;
	this.instance_10.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_10).to({scaleX:1.97,scaleY:1.97,rotation:-2.1,regX:7.4,regY:22.1,x:591.1,y:247.1},276).to({rotation:-5.2,regY:22,x:449.2,y:275.3,alpha:0},40).wait(1));

	// Camada 60 Cópia
	this.instance_11 = new lib.nota2();
	this.instance_11.setTransform(1323,0.5,1,1,15,0,0,7.7,20.9);
	this.instance_11.alpha = 0.1;
	this.instance_11.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_11).to({scaleX:1,scaleY:1,rotation:-15.6,x:428.3,y:266.5},276).to({scaleX:1,scaleY:1,rotation:-20,x:298.6,y:305.1,alpha:0},40).wait(1));

	// Camada 52 Cópia
	this.instance_12 = new lib.nota2();
	this.instance_12.setTransform(1329.3,-46,1.133,1.133,21.3,0,0,7.7,20.8);
	this.instance_12.alpha = 0.1;
	this.instance_12.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_12).to({scaleX:1.55,scaleY:1.55,rotation:11,regX:7.8,x:400.1,y:-9.1},276).to({scaleX:1.62,scaleY:1.62,rotation:9.6,regX:7.7,regY:20.9,x:265.4,y:-3.8,alpha:0},40).wait(1));

	// Camada 72 Cópia
	this.instance_13 = new lib.Interpolar31("synched",0);
	this.instance_13.setTransform(2773.8,386.6,0.859,0.859,26.8,0,0,-688.3,0);
	this.instance_13.alpha = 0.1;

	this.timeline.addTween(Tween.get(this.instance_13).to({scaleX:1.18,scaleY:1.18,rotation:-14.1,x:1849.5,y:-150.6},276).to({scaleX:1.23,scaleY:1.23,rotation:-20,regX:-688.1,x:1715.6,y:-228.5,alpha:0},40).wait(1));

	// Camada 53 Cópia
	this.instance_14 = new lib.Interpolar31("synched",0);
	this.instance_14.setTransform(1677,80,1,1,15);
	this.instance_14.alpha = 0.1;

	this.timeline.addTween(Tween.get(this.instance_14).to({scaleX:1,scaleY:1,rotation:-15.6,x:89.3,y:293.7},276).to({scaleX:1,scaleY:1,rotation:-20,x:-140.6,y:324.6,alpha:0},40).wait(1));

	// Camada 69 Cópia
	this.instance_15 = new lib.Interpolar32("synched",0);
	this.instance_15.setTransform(2431.8,192.1,2.117,2.117,44.1,0,0,-337.7,26.8);
	this.instance_15.alpha = 0.1;

	this.timeline.addTween(Tween.get(this.instance_15).to({scaleX:3.61,scaleY:3.61,rotation:33.8,x:1497.3,y:-378.5},276).to({scaleX:3.83,scaleY:3.83,rotation:32.4,x:1361.8,y:-461.2,alpha:0},40).wait(1));

	// Camada 68 Cópia
	this.instance_16 = new lib.Interpolar32("synched",0);
	this.instance_16.setTransform(2243.8,270.1,1.664,1.664,46.3,0,0,-337.8,26.7);
	this.instance_16.alpha = 0.1;

	this.timeline.addTween(Tween.get(this.instance_16).to({scaleX:2.84,scaleY:2.84,rotation:-4.8,x:1220.7,y:144.9},276).to({scaleX:3.02,scaleY:3.02,rotation:-12.2,regY:26.8,x:1072.4,y:126.5,alpha:0},40).wait(1));

	// Camada 54 Cópia
	this.instance_17 = new lib.Interpolar32("synched",0);
	this.instance_17.setTransform(1890.2,128.6,1,1,15);
	this.instance_17.alpha = 0.1;

	this.timeline.addTween(Tween.get(this.instance_17).to({scaleX:1,scaleY:1,rotation:-15.6,x:523.2,y:161.7},276).to({scaleX:1,scaleY:1,rotation:-20,x:325,y:166.5,alpha:0},40).wait(1));

	// Camada 66 Cópia
	this.instance_18 = new lib.Interpolar33("synched",0);
	this.instance_18.setTransform(2034.5,77.7,1.227,1.227,33.1);
	this.instance_18.alpha = 0.1;

	this.timeline.addTween(Tween.get(this.instance_18).to({scaleX:1.95,scaleY:1.95,rotation:12.5,x:1071.1,y:-253.9},276).to({scaleX:2.06,scaleY:2.06,rotation:9.6,x:931.5,y:-302.1,alpha:0},40).wait(1));

	// Camada 55 Cópia
	this.instance_19 = new lib.Interpolar33("synched",0);
	this.instance_19.setTransform(1756.5,91.7,1.119,1.119,18);
	this.instance_19.alpha = 0.1;

	this.timeline.addTween(Tween.get(this.instance_19).to({scaleX:1.5,scaleY:1.5,rotation:-2.1,x:562.4,y:151},276).to({scaleX:1.55,scaleY:1.55,rotation:-5.2,x:389.4,y:159.6,alpha:0},40).wait(1));

	// Camada 56 Cópia
	this.instance_20 = new lib.nota5();
	this.instance_20.setTransform(1429.9,-27.6,0.999,0.999,21.3,0,0,13.9,28.5);
	this.instance_20.alpha = 0.1;
	this.instance_20.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_20).to({scaleX:1,scaleY:1,rotation:11,x:254.9,y:49.5},276).to({scaleX:1,scaleY:1,rotation:9.6,regX:13.8,regY:28.6,x:84.6,y:60.8,alpha:0},40).wait(1));

	// Camada 57 Cópia
	this.instance_21 = new lib.nota7();
	this.instance_21.setTransform(1590.1,54.9,1,1,15,0,0,9.4,15);
	this.instance_21.alpha = 0.1;
	this.instance_21.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_21).to({scaleX:1,scaleY:1,rotation:-15.6,x:443.5,y:154.2},276).to({scaleX:1,scaleY:1,rotation:-20,x:277.2,y:168.6,alpha:0},40).wait(1));

	// Camada 71 Cópia
	this.instance_22 = new lib.Interpolar29("synched",0);
	this.instance_22.setTransform(2378.7,321.9,0.916,0.916,56.8,0,0,-487.9,-41.1);
	this.instance_22.alpha = 0.1;

	this.timeline.addTween(Tween.get(this.instance_22).to({rotation:15.8,regY:-40.9,x:1413.5,y:9.8},276).to({rotation:9.8,regX:-487.9,x:1273.6,y:-35.2,alpha:0},40).wait(1));

	// Camada 70 Cópia
	this.instance_23 = new lib.Interpolar29("synched",0);
	this.instance_23.setTransform(2437.9,215.1,0.654,0.654,44.9,0,0,-488.1,-41);
	this.instance_23.alpha = 0.1;

	this.timeline.addTween(Tween.get(this.instance_23).to({rotation:14,regX:-487.9,x:1171.5,y:-208.4},276).to({rotation:9.6,regY:-41.1,x:987.8,y:-269.8,alpha:0},40).wait(1));

	// Camada 58 Cópia
	this.instance_24 = new lib.Interpolar29("synched",0);
	this.instance_24.setTransform(1855.4,86.7,1,1,15);
	this.instance_24.alpha = 0.1;

	this.timeline.addTween(Tween.get(this.instance_24).to({scaleX:1,scaleY:1,rotation:-15.6,x:360.7,y:135.9},276).to({scaleX:1,scaleY:1,rotation:-20,x:144.2,y:143,alpha:0},40).wait(1));

	// Camada 64 Cópia 3
	this.instance_25 = new lib.notafinal17();
	this.instance_25.setTransform(1036.3,-50.8,1.012,1.012,-14.9,0,0,26.8,33.4);
	this.instance_25.alpha = 0;
	this.instance_25._off = true;

	this.timeline.addTween(Tween.get(this.instance_25).wait(134).to({_off:false},0).to({scaleX:0.89,scaleY:0.89,rotation:-8.3,regX:26.9,x:1009,y:31.2},57).to({scaleX:0.73,scaleY:0.73,rotation:0,regX:32.3,regY:36.8,x:972.2,y:142.2,alpha:0.18},77).wait(49));

	// Camada 63 Cópia 3
	this.instance_26 = new lib.notafinal16();
	this.instance_26.setTransform(901.8,-57.7,1.276,1.276,14.6,0,0,32.5,28.6);
	this.instance_26.alpha = 0;
	this.instance_26._off = true;

	this.timeline.addTween(Tween.get(this.instance_26).wait(134).to({_off:false},0).to({scaleX:1.16,scaleY:1.16,rotation:4,x:889.5,y:18.1},57).to({scaleX:1,scaleY:1,rotation:-9.7,regX:24.3,regY:22.4,x:873,y:120.7,alpha:0.5},77).wait(49));

	// Camada 62 Cópia 3
	this.instance_27 = new lib.notafinal15();
	this.instance_27.setTransform(819.6,309,1.357,1.357,14.8,0,0,32.4,28.7);
	this.instance_27.alpha = 0;
	this.instance_27._off = true;

	this.timeline.addTween(Tween.get(this.instance_27).wait(134).to({_off:false},0).to({scaleX:1.06,scaleY:1.06,rotation:4.5,regX:32.3,x:813.4,y:237},57).to({scaleX:0.66,scaleY:0.66,rotation:-9,regX:31.2,regY:28.5,x:805.3,y:139.5,alpha:0.5},77).wait(49));

	// Camada 61 Cópia 3
	this.instance_28 = new lib.notafinal14();
	this.instance_28.setTransform(1078.7,312,1.979,1.979,-29.7,0,0,32.3,28.6);
	this.instance_28.alpha = 0;
	this.instance_28._off = true;

	this.timeline.addTween(Tween.get(this.instance_28).wait(134).to({_off:false},0).to({scaleX:1.41,scaleY:1.41,rotation:-21.1,regX:32.4,regY:28.7,x:936.9,y:249.5},57).to({scaleX:0.64,scaleY:0.64,rotation:-9.6,regX:37.6,regY:34.6,x:745.1,y:164.9,alpha:0.5},77).wait(49));

	// Camada 47 Cópia 3
	this.instance_29 = new lib.notafinal3();
	this.instance_29.setTransform(199.5,-20.9,1,1,0,0,0,5.4,18.2);
	this.instance_29.alpha = 0;
	this.instance_29._off = true;

	this.timeline.addTween(Tween.get(this.instance_29).wait(134).to({_off:false},0).to({rotation:3.3,x:184,y:35.4},57).to({rotation:8,regX:7.4,regY:18.6,x:163,y:111.8,alpha:0.5},77).wait(49));

	// Camada 48 Cópia 3
	this.instance_30 = new lib.notafinal12();
	this.instance_30.setTransform(996.7,-60.8,2.213,2.213,14.8,0,0,7.5,21.9);
	this.instance_30.alpha = 0;
	this.instance_30._off = true;

	this.timeline.addTween(Tween.get(this.instance_30).wait(134).to({_off:false},0).to({scaleX:1.7,scaleY:1.7,rotation:17.8,regY:22,x:826.7,y:19.6},57).to({scaleX:1,scaleY:1,rotation:22,regX:15.4,regY:23.9,x:597.1,y:127.9,alpha:0.5},77).wait(49));

	// Camada 65 Cópia 3
	this.instance_31 = new lib.notafinal22();
	this.instance_31.setTransform(4335.9,310.6,4.132,4.132);
	this.instance_31.alpha = 0;
	this.instance_31._off = true;

	this.timeline.addTween(Tween.get(this.instance_31).wait(134).to({_off:false},0).to({scaleX:2.83,scaleY:2.83,rotation:9.5,x:3059.8,y:220.6},57).to({scaleX:1.08,scaleY:1.08,rotation:22.7,x:1335.8,y:99.2,alpha:0.5},77).wait(49));

	// Camada 49 Cópia 3
	this.instance_32 = new lib.notafinal2();
	this.instance_32.setTransform(295.7,154.5);
	this.instance_32.alpha = 0;
	this.instance_32._off = true;

	this.timeline.addTween(Tween.get(this.instance_32).wait(134).to({_off:false},0).to({rotation:8.8,x:229.6,y:133},57).to({rotation:20.6,x:140.3,y:103.9,alpha:0.5},77).wait(49));

	// Camada 50 Cópia 3
	this.instance_33 = new lib.notafinal9();
	this.instance_33.setTransform(656.2,286.6,1.969,1.969,14.8,0,0,7.4,22);
	this.instance_33.alpha = 0;
	this.instance_33._off = true;

	this.timeline.addTween(Tween.get(this.instance_33).wait(134).to({_off:false},0).to({scaleX:1.51,scaleY:1.51,rotation:21.3,x:581.2,y:221.5},57).to({scaleX:0.9,scaleY:0.9,rotation:30,regX:15.7,regY:23.7,x:480.1,y:133.6,alpha:0.5},77).wait(49));

	// Camada 60 Cópia 3
	this.instance_34 = new lib.notafinal4();
	this.instance_34.setTransform(504.6,262.5,1,1,0,0,0,7.7,20.9);
	this.instance_34.alpha = 0;
	this.instance_34._off = true;

	this.timeline.addTween(Tween.get(this.instance_34).wait(134).to({_off:false},0).to({x:383.4,y:212.6},57).to({x:219.7,y:145.1,alpha:0.5},77).wait(49));

	// Camada 52 Cópia 3
	this.instance_35 = new lib.notafinal5();
	this.instance_35.setTransform(580.3,-38.7,1.616,1.616,29.8,0,0,7.7,21);
	this.instance_35.alpha = 0;
	this.instance_35._off = true;

	this.timeline.addTween(Tween.get(this.instance_35).wait(134).to({_off:false},0).to({scaleX:1.35,scaleY:1.35,rotation:17.1,regY:20.9,x:436.3,y:30.3},57).to({scaleX:1,scaleY:1,rotation:0,regX:8.8,regY:23.7,x:241.6,y:124.2,alpha:0.5},77).wait(49));

	// Camada 72 Cópia 3
	this.instance_36 = new lib.notafinal23();
	this.instance_36.setTransform(2018.8,251.5,1.23,1.23,0,0,0,-688.2,0);
	this.instance_36.alpha = 0;
	this.instance_36._off = true;

	this.timeline.addTween(Tween.get(this.instance_36).wait(134).to({_off:false},0).to({scaleX:0.97,scaleY:0.97,regX:-688,x:1577.4,y:194.6},57).to({scaleX:0.62,scaleY:0.62,regX:-688.2,x:980.9,y:117.6,alpha:0.5},77).wait(49));

	// Camada 53 Cópia 3
	this.instance_37 = new lib.notafinal1();
	this.instance_37.setTransform(1051.3,-463,1.962,1.962,-35.6);
	this.instance_37.alpha = 0;
	this.instance_37._off = true;

	this.timeline.addTween(Tween.get(this.instance_37).wait(134).to({_off:false},0).to({scaleX:1.46,scaleY:1.46,rotation:-22.3,x:637.7,y:-214.5},57).to({scaleX:0.79,scaleY:0.79,rotation:-4.5,x:79,y:120.8,alpha:0.5},77).wait(49));

	// Camada 69 Cópia 3
	this.instance_38 = new lib.notafinal20();
	this.instance_38.setTransform(1767.4,-88.8,3.83,3.83,52.6,0,0,-337.6,26.8);
	this.instance_38.alpha = 0;
	this.instance_38._off = true;

	this.timeline.addTween(Tween.get(this.instance_38).wait(134).to({_off:false},0).to({scaleX:2.53,scaleY:2.53,rotation:40.9,regX:-337.6,x:1420.6,y:-32.9},57).to({scaleX:0.79,scaleY:0.79,rotation:25.1,regY:26.7,x:952.3,y:42.8,alpha:0.5},77).wait(49));

	// Camada 68 Cópia 3
	this.instance_39 = new lib.notafinal18();
	this.instance_39.setTransform(1292.7,362.6,3.015,3.015,7.8,0,0,-337.7,26.8);
	this.instance_39.alpha = 0;
	this.instance_39._off = true;

	this.timeline.addTween(Tween.get(this.instance_39).wait(134).to({_off:false},0).to({scaleX:2.3,scaleY:2.3,rotation:14.8,x:984.2,y:186.1},57).to({scaleX:1.35,scaleY:1.35,rotation:24.4,regX:-337.8,regY:26.7,x:567.7,y:-52.2,alpha:0.5},77).wait(49));

	// Camada 54 Cópia 3
	this.instance_40 = new lib.notafinal8();
	this.instance_40.setTransform(577.3,141.6);
	this.instance_40.alpha = 0;
	this.instance_40._off = true;

	this.timeline.addTween(Tween.get(this.instance_40).wait(134).to({_off:false},0).to({scaleX:0.87,scaleY:0.87,rotation:10.3,x:505.9,y:137.6},57).to({scaleX:0.69,scaleY:0.69,rotation:24.4,x:409.4,y:132.1,alpha:0.5},77).wait(49));

	// Camada 66 Cópia 3
	this.instance_41 = new lib.notafinal13();
	this.instance_41.setTransform(1308.5,-88.4,2.058,2.058,29.8);
	this.instance_41.alpha = 0;
	this.instance_41._off = true;

	this.timeline.addTween(Tween.get(this.instance_41).wait(134).to({_off:false},0).to({scaleX:1.71,scaleY:1.71,rotation:28.1,x:1019,y:0},57).to({scaleX:1.24,scaleY:1.24,rotation:25.6,x:627.9,y:119.4,alpha:0.5},77).wait(49));

	// Camada 55 Cópia 3
	this.instance_42 = new lib.notafinal11();
	this.instance_42.setTransform(640.1,157.4,1.552,1.552,14.8);
	this.instance_42.alpha = 0;
	this.instance_42._off = true;

	this.timeline.addTween(Tween.get(this.instance_42).wait(134).to({_off:false},0).to({scaleX:1.27,scaleY:1.27,rotation:19.3,x:602,y:127.8},57).to({scaleX:0.9,scaleY:0.9,rotation:25.6,x:550.6,y:87.9,alpha:0.5},77).wait(49));

	// Camada 56 Cópia 3
	this.instance_43 = new lib.notafinal7();
	this.instance_43.setTransform(388.3,-40.7,0.999,0.999,29.8,0,0,13.7,28.5);
	this.instance_43.alpha = 0;
	this.instance_43._off = true;

	this.timeline.addTween(Tween.get(this.instance_43).wait(134).to({_off:false},0).to({scaleX:1,scaleY:1,regX:13.8,regY:28.6,x:380.2,y:30.4},57).to({scaleX:1,scaleY:1,rotation:30,regX:23.2,regY:31.5,x:369.3,y:126.6,alpha:0.5},77).wait(49));

	// Camada 57 Cópia 3
	this.instance_44 = new lib.notafinal10();
	this.instance_44.setTransform(629.7,256.2,1,1,0,0,0,9.4,15.1);
	this.instance_44.alpha = 0;
	this.instance_44._off = true;

	this.timeline.addTween(Tween.get(this.instance_44).wait(134).to({_off:false},0).to({scaleX:1,scaleY:1,rotation:12.8,x:579.9,y:199.1},57).to({scaleX:1,scaleY:1,rotation:30,regX:15.6,regY:17.7,x:512.7,y:122.2,alpha:0.5},77).wait(49));

	// Camada 71 Cópia 3
	this.instance_45 = new lib.notafinal19();
	this.instance_45.setTransform(1537.2,280.1,0.916,0.916,30.1,0,0,-488,-41);
	this.instance_45.alpha = 0;
	this.instance_45._off = true;

	this.timeline.addTween(Tween.get(this.instance_45).wait(134).to({_off:false},0).to({scaleX:0.86,scaleY:0.86,rotation:32.1,x:1237.3,y:105.3},57).to({scaleX:0.78,scaleY:0.78,rotation:34.9,regX:-487.7,x:832.1,y:-130.8,alpha:0.5},77).wait(49));

	// Camada 70 Cópia 3
	this.instance_46 = new lib.notafinal21();
	this.instance_46.setTransform(1350.2,-38.6,0.654,0.654,29.9,0,0,-487.9,-41.1);
	this.instance_46.alpha = 0;
	this.instance_46._off = true;

	this.timeline.addTween(Tween.get(this.instance_46).wait(134).to({_off:false},0).to({scaleX:0.67,scaleY:0.67,rotation:32.8,regX:-487.9,x:1215.2,y:-64.9},57).to({scaleX:0.69,scaleY:0.69,rotation:37,regY:-41.1,x:1032.8,y:-100.4,alpha:0.5},77).wait(49));

	// Camada 58 Cópia 3
	this.instance_47 = new lib.notafinal6();
	this.instance_47.setTransform(415.8,57);
	this.instance_47.alpha = 0;
	this.instance_47._off = true;

	this.timeline.addTween(Tween.get(this.instance_47).wait(134).to({_off:false},0).to({scaleX:0.86,scaleY:0.86,rotation:14.8,x:369.2,y:80.5},57).to({scaleX:0.68,scaleY:0.68,rotation:35.2,x:306.4,y:112.1,alpha:0.5},77).wait(49));

	// Camada 64 Cópia 2
	this.instance_48 = new lib.nota10();
	this.instance_48.setTransform(1100.7,93,0.936,0.936,0,0,0,26.8,33.5);
	this.instance_48.alpha = 0;
	this.instance_48.compositeOperation = "lighter";
	this.instance_48._off = true;

	this.timeline.addTween(Tween.get(this.instance_48).wait(114).to({_off:false},0).to({scaleX:0.91,scaleY:0.91,x:1097.3,y:79.5,alpha:0.38},14).to({scaleX:0.87,scaleY:0.87,x:1090.3,y:52.5,alpha:0},28).to({scaleX:0.7,scaleY:0.7,x:1066.4,y:-40},96).to({_off:true},1).wait(64));

	// Camada 63 Cópia 2
	this.instance_49 = new lib.nota9();
	this.instance_49.setTransform(1000.1,58.6,0.649,0.649,-20.2,0,0,32.5,28.5);
	this.instance_49.alpha = 0;
	this.instance_49.compositeOperation = "lighter";
	this.instance_49._off = true;

	this.timeline.addTween(Tween.get(this.instance_49).wait(114).to({_off:false},0).to({scaleX:0.71,scaleY:0.71,rotation:-16.6,x:990.1,y:46.8,alpha:0.38},14).to({scaleX:0.84,scaleY:0.84,rotation:-9.4,x:970.1,y:23.2,alpha:0},28).to({scaleX:1.28,scaleY:1.28,rotation:14.6,regY:28.6,x:901.8,y:-57.6},96).to({_off:true},1).wait(64));

	// Camada 62 Cópia 2
	this.instance_50 = new lib.nota9();
	this.instance_50.setTransform(920.2,152.7,0.858,0.858,-8.4,0,0,32.3,28.7);
	this.instance_50.alpha = 0;
	this.instance_50.compositeOperation = "lighter";
	this.instance_50._off = true;

	this.timeline.addTween(Tween.get(this.instance_50).wait(114).to({_off:false},0).to({scaleX:0.91,scaleY:0.91,rotation:-5.8,x:910.2,y:168.6,alpha:0.38},14).to({scaleX:1.01,scaleY:1.01,rotation:-1.1,regX:32.2,x:889.6,y:200.3,alpha:0},28).to({scaleX:1.36,scaleY:1.36,rotation:14.8,regX:32.4,x:819.6,y:309},96).to({_off:true},1).wait(64));

	// Camada 61 Cópia 2
	this.instance_51 = new lib.nota9();
	this.instance_51.setTransform(905.7,166.7,1.211,1.211,-6.2,0,0,32.4,28.6);
	this.instance_51.alpha = 0;
	this.instance_51.compositeOperation = "lighter";
	this.instance_51._off = true;

	this.timeline.addTween(Tween.get(this.instance_51).wait(114).to({_off:false},0).to({scaleX:1.29,scaleY:1.29,rotation:-8.4,regY:28.7,x:923.3,y:181.5,alpha:0.38},14).to({scaleX:1.44,scaleY:1.44,rotation:-13.1,x:958.4,y:210.9,alpha:0},28).to({scaleX:1.98,scaleY:1.98,rotation:-29.6,regX:32.3,regY:28.6,x:1078.7,y:312},96).to({_off:true},1).wait(64));

	// Camada 47 Cópia 2
	this.instance_52 = new lib.nota3();
	this.instance_52.setTransform(254.6,124.2,1,1,0,0,0,5.4,18.2);
	this.instance_52.alpha = 0;
	this.instance_52.compositeOperation = "lighter";
	this.instance_52._off = true;

	this.timeline.addTween(Tween.get(this.instance_52).wait(114).to({_off:false},0).to({alpha:0.38},14).to({rotation:-6.6,x:241,y:156.2,alpha:0},28).to({rotation:-29.8,regX:5.3,x:194.5,y:265.9},96).to({_off:true},1).wait(64));

	// Camada 48 Cópia 2
	this.instance_53 = new lib.nota4();
	this.instance_53.setTransform(783.2,67.4,1.747,1.747,14.8,0,0,7.5,22);
	this.instance_53.alpha = 0;
	this.instance_53.compositeOperation = "lighter";
	this.instance_53._off = true;

	this.timeline.addTween(Tween.get(this.instance_53).wait(114).to({_off:false},0).to({scaleX:1.79,scaleY:1.79,regX:7.4,regY:21.9,x:804.8,y:54.2,alpha:0.38},14).to({scaleX:1.89,scaleY:1.89,regX:7.5,x:848.1,y:28.3,alpha:0},28).to({scaleX:2.21,scaleY:2.21,x:996.7,y:-60.7},96).to({_off:true},1).wait(64));

	// Camada 65 Cópia 2
	this.instance_54 = new lib.Interpolar30("synched",0);
	this.instance_54.setTransform(2808.7,126.5,2.157,2.157);
	this.instance_54.alpha = 0;
	this.instance_54._off = true;

	this.timeline.addTween(Tween.get(this.instance_54).wait(114).to({_off:false},0).to({scaleX:2.36,scaleY:2.36,x:2904.7,y:142.6,alpha:0.38},14).to({scaleX:2.76,scaleY:2.76,x:3096.8,y:174.9,alpha:0},28).to({scaleX:4.13,scaleY:4.13,x:3755.1,y:285.4},96).to({_off:true},1).wait(64));

	// Camada 49 Cópia 2
	this.instance_55 = new lib.Interpolar30("synched",0);
	this.instance_55.setTransform(778.8,137.8);
	this.instance_55.alpha = 0;
	this.instance_55._off = true;

	this.timeline.addTween(Tween.get(this.instance_55).wait(114).to({_off:false},0).to({x:729.8,y:139.5,alpha:0.38},14).to({x:631.8,y:142.9,alpha:0},28).to({x:295.7,y:154.5},96).to({_off:true},1).wait(64));

	// Camada 50 Cópia 2
	this.instance_56 = new lib.nota4();
	this.instance_56.setTransform(511.7,130.4,1.97,1.97,3,0,0,7.4,22.1);
	this.instance_56.alpha = 0;
	this.instance_56.compositeOperation = "lighter";
	this.instance_56._off = true;

	this.timeline.addTween(Tween.get(this.instance_56).wait(114).to({_off:false},0).to({scaleX:1.97,scaleY:1.97,rotation:4.1,regY:22,x:526.3,y:146.1,alpha:0.38},14).to({scaleX:1.97,scaleY:1.97,rotation:6.3,x:555.7,y:178,alpha:0},28).to({scaleX:1.97,scaleY:1.97,rotation:14.8,x:656.2,y:286.6},96).to({_off:true},1).wait(64));

	// Camada 60 Cópia 2
	this.instance_57 = new lib.nota2();
	this.instance_57.setTransform(259.7,143.6,1,1,0,0,0,7.7,20.9);
	this.instance_57.alpha = 0;
	this.instance_57.compositeOperation = "lighter";
	this.instance_57._off = true;

	this.timeline.addTween(Tween.get(this.instance_57).wait(114).to({_off:false},0).to({x:284.6,y:155.7,alpha:0.38},14).to({x:334.3,y:179.8,alpha:0},28).to({x:504.6,y:262.5},96).to({_off:true},1).wait(64));

	// Camada 52 Cópia 2
	this.instance_58 = new lib.nota2();
	this.instance_58.setTransform(253.7,97.1,1.133,1.133,6.3,0,0,7.7,20.9);
	this.instance_58.alpha = 0;
	this.instance_58.compositeOperation = "lighter";
	this.instance_58._off = true;

	this.timeline.addTween(Tween.get(this.instance_58).wait(114).to({_off:false},0).to({scaleX:1.18,scaleY:1.18,rotation:8.6,x:286.9,y:83.2,alpha:0.38},14).to({scaleX:1.28,scaleY:1.28,rotation:13.3,regX:7.8,x:353.2,y:55.7,alpha:0},28).to({scaleX:1.62,scaleY:1.62,rotation:29.8,regX:7.7,regY:21,x:580.3,y:-38.6},96).to({_off:true},1).wait(64));

	// Camada 72 Cópia 2
	this.instance_59 = new lib.Interpolar31("synched",0);
	this.instance_59.setTransform(1761.1,141.2,0.859,0.859,11.8,0,0,-688.3,0);
	this.instance_59.alpha = 0;
	this.instance_59._off = true;

	this.timeline.addTween(Tween.get(this.instance_59).wait(114).to({_off:false},0).to({scaleX:0.9,scaleY:0.9,rotation:10.5,x:1787.3,y:152.3,alpha:0.38},14).to({scaleX:0.97,scaleY:0.97,rotation:8,x:1839.5,y:174.8,alpha:0},28).to({scaleX:1.23,scaleY:1.23,rotation:0,regX:-688.1,x:2018.8,y:251.5},96).to({_off:true},1).wait(64));

	// Camada 53 Cópia 2
	this.instance_60 = new lib.Interpolar31("synched",0);
	this.instance_60.setTransform(622.3,128.9);
	this.instance_60.alpha = 0;
	this.instance_60._off = true;

	this.timeline.addTween(Tween.get(this.instance_60).wait(114).to({_off:false},0).to({x:567.8,alpha:0.38},14).to({x:458.9,alpha:0},28).to({x:85.6},96).to({_off:true},1).wait(64));

	// Camada 69 Cópia 2
	this.instance_61 = new lib.Interpolar32("synched",0);
	this.instance_61.setTransform(1380.5,41.8,2.117,2.117,29.1,0,0,-337.7,26.8);
	this.instance_61.alpha = 0;
	this.instance_61._off = true;

	this.timeline.addTween(Tween.get(this.instance_61).wait(114).to({_off:false},0).to({scaleX:2.29,scaleY:2.29,rotation:31.4,x:1419.7,y:28.6,alpha:0.38},14).to({scaleX:2.63,scaleY:2.63,rotation:36.1,regX:-337.7,x:1498,y:1.8,alpha:0},28).to({scaleX:3.83,scaleY:3.83,rotation:52.6,regX:-337.6,x:1767.2,y:-88.9},96).to({_off:true},1).wait(64));

	// Camada 68 Cópia 2
	this.instance_62 = new lib.Interpolar32("synched",0);
	this.instance_62.setTransform(1218.9,165.8,1.664,1.664,31.3,0,0,-337.9,26.8);
	this.instance_62.alpha = 0;
	this.instance_62._off = true;

	this.timeline.addTween(Tween.get(this.instance_62).wait(114).to({_off:false},0).to({scaleX:1.8,scaleY:1.8,rotation:28.8,regX:-337.7,regY:26.7,x:1226.5,y:185.7,alpha:0.38},14).to({scaleX:2.07,scaleY:2.07,rotation:24.1,x:1241.3,y:225.8,alpha:0},28).to({scaleX:3.02,scaleY:3.02,rotation:7.8,regX:-337.6,regY:26.8,x:1292.5,y:362.6},96).to({_off:true},1).wait(64));

	// Camada 54 Cópia 2
	this.instance_63 = new lib.Interpolar32("synched",0);
	this.instance_63.setTransform(840.8,120.6);
	this.instance_63.alpha = 0;
	this.instance_63._off = true;

	this.timeline.addTween(Tween.get(this.instance_63).wait(114).to({_off:false},0).to({x:814.1,y:122.8,alpha:0.38},14).to({x:760.6,y:127,alpha:0},28).to({x:577.3,y:141.6},96).to({_off:true},1).wait(64));

	// Camada 66 Cópia 2
	this.instance_64 = new lib.Interpolar33("synched",0);
	this.instance_64.setTransform(967,34.1,1.227,1.227,18.1);
	this.instance_64.alpha = 0;
	this.instance_64._off = true;

	this.timeline.addTween(Tween.get(this.instance_64).wait(114).to({_off:false},0).to({scaleX:1.31,scaleY:1.31,rotation:19.3,x:1001.7,y:21.6,alpha:0.38},14).to({scaleX:1.48,scaleY:1.48,rotation:21.6,x:1071,y:-3.1,alpha:0},28).to({scaleX:2.06,scaleY:2.06,rotation:29.8,x:1308.5,y:-88.3},96).to({_off:true},1).wait(64));

	// Camada 55 Cópia 2
	this.instance_65 = new lib.Interpolar33("synched",0);
	this.instance_65.setTransform(702.1,119.5,1.119,1.119,3);
	this.instance_65.alpha = 0;
	this.instance_65._off = true;

	this.timeline.addTween(Tween.get(this.instance_65).wait(114).to({_off:false},0).to({scaleX:1.16,scaleY:1.16,rotation:4.1,x:695.8,y:123.5,alpha:0.38},14).to({scaleX:1.25,scaleY:1.25,rotation:6.3,x:683.2,y:131.2,alpha:0},28).to({scaleX:1.55,scaleY:1.55,rotation:14.8,x:640.1,y:157.4},96).to({_off:true},1).wait(64));

	// Camada 56 Cópia 2
	this.instance_66 = new lib.nota5();
	this.instance_66.setTransform(355.7,88.6,0.999,0.999,6.3,0,0,13.9,28.5);
	this.instance_66.alpha = 0;
	this.instance_66.compositeOperation = "lighter";
	this.instance_66._off = true;

	this.timeline.addTween(Tween.get(this.instance_66).wait(114).to({_off:false},0).to({rotation:8.5,regX:13.8,x:358.8,y:75.5,alpha:0.38},14).to({scaleX:1,scaleY:1,rotation:13.3,x:365.4,y:49.3,alpha:0},28).to({scaleX:1,scaleY:1,rotation:29.8,regX:13.7,x:388.3,y:-40.6},96).to({_off:true},1).wait(64));

	// Camada 57 Cópia 2
	this.instance_67 = new lib.nota7();
	this.instance_67.setTransform(531.8,127.1,1,1,0,0,0,9.4,15.1);
	this.instance_67.alpha = 0;
	this.instance_67.compositeOperation = "lighter";
	this.instance_67._off = true;

	this.timeline.addTween(Tween.get(this.instance_67).wait(114).to({_off:false},0).to({alpha:0.38},14).to({alpha:0},28).wait(96).to({_off:true},1).wait(64));

	// Camada 71 Cópia 2
	this.instance_68 = new lib.Interpolar29("synched",0);
	this.instance_68.setTransform(1362.6,180.8,0.916,0.916,41.8,0,0,-487.9,-41.1);
	this.instance_68.alpha = 0;
	this.instance_68._off = true;

	this.timeline.addTween(Tween.get(this.instance_68).wait(114).to({_off:false},0).to({scaleX:0.91,scaleY:0.91,rotation:40.6,regX:-487.9,x:1380.3,y:190.9,alpha:0.38},14).to({scaleX:0.91,scaleY:0.91,rotation:38.1,x:1415.7,y:211,alpha:0},28).to({scaleX:0.92,scaleY:0.92,rotation:30.1,regY:-40.9,x:1537.2,y:280.1},96).to({_off:true},1).wait(64));

	// Camada 70 Cópia 2
	this.instance_69 = new lib.Interpolar29("synched",0);
	this.instance_69.setTransform(1392.3,62.4,0.654,0.654,29.9,0,0,-488.1,-41.1);
	this.instance_69.alpha = 0;
	this.instance_69._off = true;

	this.timeline.addTween(Tween.get(this.instance_69).wait(114).to({_off:false},0).to({scaleX:0.65,scaleY:0.65,rotation:29.8,regX:-487.9,x:1388,y:52.1,alpha:0.38},14).to({scaleX:0.65,scaleY:0.65,regX:-488,regY:-40.9,x:1379.5,y:31.5,alpha:0},28).to({scaleX:0.65,scaleY:0.65,rotation:29.9,regX:-487.9,regY:-41,x:1350.1,y:-38.6},96).to({_off:true},1).wait(64));

	// Camada 58 Cópia 2
	this.instance_70 = new lib.Interpolar29("synched",0);
	this.instance_70.setTransform(796.4,89.1);
	this.instance_70.alpha = 0;
	this.instance_70._off = true;

	this.timeline.addTween(Tween.get(this.instance_70).wait(114).to({_off:false},0).to({x:757.8,y:85.9,alpha:0.38},14).to({x:680.6,y:79.4,alpha:0},28).to({x:415.8,y:57},96).to({_off:true},1).wait(64));

	// Camada 64
	this.instance_71 = new lib.nota10();
	this.instance_71.setTransform(1100.7,93,0.936,0.936,0,0,0,26.8,33.5);
	this.instance_71.alpha = 0;
	this.instance_71.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_71).to({scaleX:0.99,scaleY:0.99,rotation:-9.6,regX:26.7,regY:33.6,x:1058.2,y:-1.5,alpha:0.27},91).to({scaleX:1.01,scaleY:1.01,rotation:-14.8,regX:26.8,regY:33.4,x:1036.3,y:-50.7,alpha:0},47).to({scaleX:0.7,scaleY:0.7,rotation:0,regY:33.5,x:1066.4,y:-40},41).to({_off:true},1).wait(137));

	// Camada 63
	this.instance_72 = new lib.nota9();
	this.instance_72.setTransform(1000.1,58.6,0.649,0.649,-20.2,0,0,32.5,28.5);
	this.instance_72.alpha = 0;
	this.instance_72.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_72).to({scaleX:1.06,scaleY:1.06,rotation:2.5,regY:28.6,x:935.3,y:-17.9,alpha:0.27},91).to({scaleX:1.28,scaleY:1.28,rotation:14.6,x:901.8,y:-57.6,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 62
	this.instance_73 = new lib.nota9();
	this.instance_73.setTransform(920.2,152.7,0.858,0.858,-8.4,0,0,32.3,28.7);
	this.instance_73.alpha = 0;
	this.instance_73.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_73).to({scaleX:1.19,scaleY:1.19,rotation:6.8,regX:32.4,x:854,y:255.9,alpha:0.27},91).to({scaleX:1.36,scaleY:1.36,rotation:14.8,x:819.6,y:309,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 61
	this.instance_74 = new lib.nota9();
	this.instance_74.setTransform(905.7,166.7,1.211,1.211,-6.2,0,0,32.4,28.6);
	this.instance_74.alpha = 0;
	this.instance_74.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_74).to({scaleX:1.72,scaleY:1.72,rotation:-21.6,regY:28.7,x:1019.9,y:262.5,alpha:0.27},91).to({scaleX:1.98,scaleY:1.98,rotation:-29.6,regX:32.3,regY:28.6,x:1078.7,y:312,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 47
	this.instance_75 = new lib.nota3();
	this.instance_75.setTransform(254.6,124.2,1,1,0,0,0,5.4,18.2);
	this.instance_75.alpha = 0;
	this.instance_75.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_75).to({x:218.3,y:28.4,alpha:0.27},91).to({x:199.5,y:-20.8,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 48
	this.instance_76 = new lib.nota4();
	this.instance_76.setTransform(783.2,67.4,1.747,1.747,14.8,0,0,7.5,22);
	this.instance_76.alpha = 0;
	this.instance_76.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_76).to({scaleX:2.05,scaleY:2.05,regY:21.9,x:924,y:-17,alpha:0.27},91).to({scaleX:2.21,scaleY:2.21,x:996.7,y:-60.7,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 65
	this.instance_77 = new lib.Interpolar30("synched",0);
	this.instance_77.setTransform(2808.7,126.5,2.157,2.157);
	this.instance_77.alpha = 0;

	this.timeline.addTween(Tween.get(this.instance_77).to({scaleX:3.46,scaleY:3.46,x:3432.8,y:231.4,alpha:0.27},91).to({scaleX:4.13,scaleY:4.13,x:3755.1,y:285.4,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 49
	this.instance_78 = new lib.Interpolar30("synched",0);
	this.instance_78.setTransform(778.8,137.8);
	this.instance_78.alpha = 0;

	this.timeline.addTween(Tween.get(this.instance_78).to({x:460.2,y:148.8,alpha:0.27},91).to({x:295.7,y:154.5,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 50
	this.instance_79 = new lib.nota4();
	this.instance_79.setTransform(511.7,130.4,1.97,1.97,3,0,0,7.4,22.1);
	this.instance_79.alpha = 0;
	this.instance_79.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_79).to({scaleX:1.97,scaleY:1.97,rotation:10.8,regY:22,x:607,y:233.3,alpha:0.27},91).to({scaleX:1.97,scaleY:1.97,rotation:14.8,x:656.2,y:286.6,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 60
	this.instance_80 = new lib.nota2();
	this.instance_80.setTransform(259.7,143.6,1,1,0,0,0,7.7,20.9);
	this.instance_80.alpha = 0;
	this.instance_80.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_80).to({x:421.2,y:222,alpha:0.27},91).to({x:504.6,y:262.5,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 52
	this.instance_81 = new lib.nota2();
	this.instance_81.setTransform(253.7,97.1,1.133,1.133,6.3,0,0,7.7,20.9);
	this.instance_81.alpha = 0;
	this.instance_81.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_81).to({scaleX:1.45,scaleY:1.45,rotation:21.8,x:469.1,y:7.3,alpha:0.27},91).to({scaleX:1.62,scaleY:1.62,rotation:29.8,regY:21,x:580.3,y:-38.6,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 72
	this.instance_82 = new lib.Interpolar31("synched",0);
	this.instance_82.setTransform(1761.1,141.2,0.859,0.859,11.8,0,0,-688.3,0);
	this.instance_82.alpha = 0;

	this.timeline.addTween(Tween.get(this.instance_82).to({scaleX:1.1,scaleY:1.1,rotation:4,regX:-688.1,x:1931,y:214,alpha:0.27},91).to({scaleX:1.23,scaleY:1.23,rotation:0,x:2018.8,y:251.5,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 53
	this.instance_83 = new lib.Interpolar31("synched",0);
	this.instance_83.setTransform(798.5,128.9);
	this.instance_83.alpha = 0;

	this.timeline.addTween(Tween.get(this.instance_83).to({scaleX:1.63,scaleY:1.63,rotation:-23.3,x:965.1,y:-261.4,alpha:0.27},91).to({scaleX:1.96,scaleY:1.96,rotation:-35.5,x:1051.3,y:-462.9,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 69
	this.instance_84 = new lib.Interpolar32("synched",0);
	this.instance_84.setTransform(1380.5,41.8,2.117,2.117,29.1,0,0,-337.7,26.8);
	this.instance_84.alpha = 0;

	this.timeline.addTween(Tween.get(this.instance_84).to({scaleX:3.24,scaleY:3.24,rotation:44.6,regY:26.9,x:1635.2,y:-44.2,alpha:0.27},91).to({scaleX:3.83,scaleY:3.83,rotation:52.6,regY:26.8,x:1767.2,y:-88.9,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 68
	this.instance_85 = new lib.Interpolar32("synched",0);
	this.instance_85.setTransform(1218.9,165.8,1.664,1.664,31.3,0,0,-337.9,26.8);
	this.instance_85.alpha = 0;

	this.timeline.addTween(Tween.get(this.instance_85).to({scaleX:2.55,scaleY:2.55,rotation:15.8,regX:-337.7,x:1267.4,y:295.7,alpha:0.27},91).to({scaleX:3.02,scaleY:3.02,rotation:7.8,regX:-337.6,x:1292.5,y:362.6,alpha:0},47).to({rotation:7.8},41).to({_off:true},1).wait(137));

	// Camada 54
	this.instance_86 = new lib.Interpolar32("synched",0);
	this.instance_86.setTransform(840.8,120.6);
	this.instance_86.alpha = 0;

	this.timeline.addTween(Tween.get(this.instance_86).to({x:667.1,y:134.4,alpha:0.27},91).to({x:577.3,y:141.6,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 66
	this.instance_87 = new lib.Interpolar33("synched",0);
	this.instance_87.setTransform(967,34.1,1.227,1.227,18.1);
	this.instance_87.alpha = 0;

	this.timeline.addTween(Tween.get(this.instance_87).to({scaleX:1.77,scaleY:1.77,rotation:25.8,x:1192.2,y:-46.6,alpha:0.27},91).to({scaleX:2.06,scaleY:2.06,rotation:29.8,x:1308.5,y:-88.3,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 55
	this.instance_88 = new lib.Interpolar33("synched",0);
	this.instance_88.setTransform(702.1,119.5,1.119,1.119,3);
	this.instance_88.alpha = 0;

	this.timeline.addTween(Tween.get(this.instance_88).to({scaleX:1.4,scaleY:1.4,rotation:10.8,x:661.1,y:144.5,alpha:0.27},91).to({scaleX:1.55,scaleY:1.55,rotation:14.8,x:640.1,y:157.4,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 56
	this.instance_89 = new lib.nota5();
	this.instance_89.setTransform(355.7,88.6,0.999,0.999,6.3,0,0,13.9,28.5);
	this.instance_89.alpha = 0;
	this.instance_89.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_89).to({scaleX:1,scaleY:1,rotation:21.8,x:377.1,y:3.3,alpha:0.27},91).to({scaleX:1,scaleY:1,rotation:29.8,regX:13.7,x:388.3,y:-40.6,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 57
	this.instance_90 = new lib.nota7();
	this.instance_90.setTransform(531.8,127.1,1,1,0,0,0,9.4,15.1);
	this.instance_90.alpha = 0;
	this.instance_90.compositeOperation = "lighter";

	this.timeline.addTween(Tween.get(this.instance_90).to({x:596.3,y:212.2,alpha:0.27},91).to({x:629.7,y:256.2,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 71
	this.instance_91 = new lib.Interpolar29("synched",0);
	this.instance_91.setTransform(1362.6,180.8,0.916,0.916,41.8,0,0,-487.9,-41.1);
	this.instance_91.alpha = 0;

	this.timeline.addTween(Tween.get(this.instance_91).to({scaleX:0.92,scaleY:0.92,rotation:34.1,x:1477.9,y:246.3,alpha:0.27},91).to({scaleX:0.92,scaleY:0.92,rotation:30.1,regX:-487.9,regY:-40.9,x:1537.2,y:280.1,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 70
	this.instance_92 = new lib.Interpolar29("synched",0);
	this.instance_92.setTransform(1392.3,62.4,0.654,0.654,29.9,0,0,-488.1,-41.1);
	this.instance_92.alpha = 0;

	this.timeline.addTween(Tween.get(this.instance_92).to({scaleX:0.65,scaleY:0.65,rotation:29.8,x:1364.6,y:-4.2,alpha:0.27},91).to({scaleX:0.65,scaleY:0.65,rotation:29.9,regX:-487.9,x:1350.1,y:-38.6,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// Camada 58
	this.instance_93 = new lib.Interpolar29("synched",0);
	this.instance_93.setTransform(796.4,89.1);
	this.instance_93.alpha = 0;

	this.timeline.addTween(Tween.get(this.instance_93).to({x:545.4,y:68,alpha:0.27},91).to({x:415.8,y:57,alpha:0},47).wait(41).to({_off:true},1).wait(137));

	// linhas
	this.instance_94 = new lib.Símbolo1();
	this.instance_94.setTransform(1359.5,120.1,1,1,0,0,0,596.5,49);
	this.instance_94.alpha = 0.6;

	this.timeline.addTween(Tween.get({}).to({state:[{t:this.instance_94}]}).wait(317));

	// fundo
	this.instance_95 = new lib.Interpolar27("synched",0);
	this.instance_95.setTransform(960,119.5);

	this.timeline.addTween(Tween.get({}).to({state:[{t:this.instance_95}]}).wait(317));

}).prototype = p = new MovieClip();
p.nominalBounds = new Rectangle(-47.1,-165.5,2862.8,609.8);


// symbols:
(lib.slogan = function() {
	this.initialize();

	// Camada 1
	this.instance = new lib.slogan_1();

	this.addChild(this.instance);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(0,0,348,193);


(lib.slogan_1 = function() {
	this.initialize(images.slogan_1);
}).prototype = new Bitmap();
p.nominalBounds = new Rectangle(0,0,348,193);


(lib.logo = function() {
	this.initialize();

	// Camada 1
	this.instance = new lib.home();

	this.addChild(this.instance);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(0,0,458,229);


(lib.home = function() {
	this.initialize(images.home);
}).prototype = new Bitmap();
p.nominalBounds = new Rectangle(0,0,458,229);


(lib.nota10 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#ffffff").p("AgNglQgkAPALAiQALAkAhgGQAUgDAKgQQAIgPgEgRQgEgSgNgJQgPgJgVAI").f();
	this.shape.setTransform(49.4,20.7);

	this.shape_1 = new Shape();
	this.shape_1.graphics.f("#ffffff").p("AA/lCQgygNgvAJQgwAKgmAaQgjAXgWAhQgSAbgHAfQgHAlANAiQANAgAhANQAdAKAhgIQAigHARgYQATgagLghQgHgXgVgMQgTgLgWADQgIABgfAQQgUAKgKgNQgIgMAIgXQAHgRAJgMQAYgfAugRQBEgZAuApQAoAhATBJQATBIgNBSQgMBDgeA9QgWAtgqA1QgYAegzA6IgLAMQgGAJAHAIQAGADAJgIQAKgKAEgDQBnhdAvg5QBKhYAdhYQAWhJgIhFQgKhTg1gsQgfgbgugM").f();
	this.shape_1.setTransform(20.5,34);

	this.shape_2 = new Shape();
	this.shape_2.graphics.f("#ffffff").p("AAqgMQgHgVgTgGQgRgGgTALQgkAVAVAlQAQAeAkgPQAlgPgMgk").f();
	this.shape_2.setTransform(44.9,4.3);

	this.shape_3 = new Shape();
	this.shape_3.graphics.f("#ffffff").p("AgNglQgkAPALAiQALAkAhgGQAUgDAKgQQAIgPgEgRQgEgSgNgJQgPgJgVAI").f();
	this.shape_3.setTransform(49.4,20.7);

	this.shape_4 = new Shape();
	this.shape_4.graphics.f("#ffffff").p("AAikQQAnAhAUBJQASBIgNBSQgLBCgfA9QgWAtgpA1QgZAegyA7IgLAMQgGAJAGAHQAHADAJgHQAKgKADgEQBnhdAvg5QBLhYAchYQAXhIgJhFQgKhTg1gsQgfgbgugNQgygMgvAJQgvAKgmAaQgkAXgWAhQgSAbgGAfQgIAlAOAiQAMAgAhAMQAeALAhgIQAhgIARgXQATgagLghQgHgXgUgMQgUgLgWADQgIABgfAQQgUAKgJgOQgIgLAIgXQAGgRAKgMQAXggAugQQBEgZAvAp").f();
	this.shape_4.setTransform(20.5,34);

	this.shape_5 = new Shape();
	this.shape_5.graphics.f("#ffffff").p("AAqgMQgHgVgTgGQgRgGgTALQgkAVAVAlQAQAeAkgPQAlgPgMgk").f();
	this.shape_5.setTransform(44.9,4.3);

	this.shape_6 = new Shape();
	this.shape_6.graphics.f("#ffffff").p("AgNglQgkAPALAiQALAkAhgGQAUgDAKgQQAIgPgEgRQgEgSgNgJQgPgJgVAI").f();
	this.shape_6.setTransform(49.4,20.7);

	this.shape_7 = new Shape();
	this.shape_7.graphics.f("#ffffff").p("AAikQQAnAhAUBJQASBIgNBSQgLBCgfA9QgWAtgpA1QgZAegyA7IgLAMQgGAJAGAHQAHADAJgHQAKgKADgEQBnhdAvg5QBLhYAchYQAXhIgJhFQgKhTg1gsQgfgbgugNQgygMgvAJQgvAKgmAaQgkAXgWAhQgSAbgGAfQgIAlAOAiQAMAgAhAMQAeALAhgIQAhgIARgXQATgagLghQgHgXgUgMQgUgLgWADQgIABgfAQQgUAKgJgOQgIgLAIgXQAGgRAKgMQAXggAugQQBEgZAvAp").f();
	this.shape_7.setTransform(20.5,34);

	this.shape_8 = new Shape();
	this.shape_8.graphics.f("#ffffff").p("AAqgMQgHgVgTgGQgRgGgTALQgkAVAVAlQAQAeAkgPQAlgPgMgk").f();
	this.shape_8.setTransform(44.9,4.3);

	this.addChild(this.shape_8,this.shape_7,this.shape_6,this.shape_5,this.shape_4,this.shape_3,this.shape_2,this.shape_1,this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(0,0,53.5,67.1);


(lib.nota9 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#ffffff").p("AD2jlQgmAIgUAYQgNANgNAiQgIATgQAqQh1EUgVAvQgvgKhjgQQhggQgugKICaluQAZAoA4gNQA1gPARgtQAGgRgGgQQgGgQgLgIQgagTglAMQghAKgVAZQgLAOgQAlQgJAVgSAtIiYFpIADABQBoARDRAlICwmjQAXAqA5gPQA5gPAPguQALgjgdgSQgZgQggAG").f();
	this.shape.setTransform(32.4,28.7);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(0,0,64.8,57.4);


(lib.nota3 = function() {
	this.initialize();

	// Camada 1
	this.instance = new lib.Interpolar3("synched",0);
	this.instance.setTransform(5.4,18.2);

	this.addChild(this.instance);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(0,0,10.7,36.3);


(lib.Interpolar3 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#ffffff").p("AA0ihQgCgHgIgFQgGgEgGgCQgcgHgcAXQgbAWAAAXQABANADAXQAHAmAAABQAAADAPBqQAJBCAHAqQAAABAAADQABADACABIAGgBQAAAAAAgCIgmkNQAUAJAZgKQAKgEALgJQAMgJAGgKQAOgUgGgS").f();

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(-5.3,-18.1,10.7,36.3);


(lib.nota4 = function() {
	this.initialize();

	// Camada 1
	this.instance = new lib.Interpolar5("synched",0);
	this.instance.setTransform(7.4,22);

	this.addChild(this.instance);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(0,0,14.9,43.9);


(lib.Interpolar5 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#ffffff").p("AhIjYQgCABACACIB6E0QgagFgaASQgKAIgKANQgLAPgEAMQgEAMAAAMQAAAOAHAKQAEAIAKAEQAJAEAHAAQAhABAagkQAZghgHgbQgEgQgLgaQgSgqgBgCQhBipgihQQgBgDgBgCQgBgDgDgBIgGAD").f();

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(-7.3,-21.9,14.9,43.9);


(lib.Interpolar30 = function() {
	this.initialize();

	// Camada 1
	this.instance = new lib.nota4();
	this.instance.setTransform(-619.4,21.5,1,1,0,0,0,7.4,22);
	this.instance.alpha = 0.5;
	this.instance.compositeOperation = "lighter";

	this.addChild(this.instance);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(-626.9,-0.4,14.9,43.9);


(lib.nota2 = function() {
	this.initialize();

	// Camada 1
	this.instance = new lib.Interpolar13("synched",0);
	this.instance.setTransform(7.7,20.9);

	this.addChild(this.instance);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(0,0,15.4,41.8);


(lib.Interpolar13 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#ffffff").p("AANhsIgWhkIgPADIAWBoIgiARIgXhkIgPAEIAXBnQgLAHgOAFIANA2QAEgBAIgFQAHgEAFgBIARBLQgOAHgLAFIAMA3QAGgBAHgEQAIgEAEgCIAWBkIAPgDIgXhpQAJgEAagNIAVBgIAPgEIgWhkQANgFALgHIgMg2IgYAMIgRhNIAZgMIgMg1IgYAM").p("AAKgwIARBNIgjARIgRhMQAWgKAKgHIADgB").f();

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(-7.6,-20.8,15.4,41.8);


(lib.Interpolar31 = function() {
	this.initialize();

	// Camada 1
	this.instance = new lib.nota1();
	this.instance.setTransform(-688.2,0.1,1,1,0,0,0,22.4,63.8);
	this.instance.alpha = 0.5;
	this.instance.compositeOperation = "lighter";

	this.addChild(this.instance);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(-710.7,-63.7,44.9,127.5);


(lib.nota1 = function() {
	this.initialize();

	// Camada 1
	this.instance = new lib.Interpolar15("synched",0);
	this.instance.setTransform(22.4,63.8);

	this.addChild(this.instance);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(0,0,44.9,127.5);


(lib.Interpolar15 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#ffffff").p("AArpyQgNAKgHAIQguA4gNBvQgNBsAbBWQgjAphbBdQhKBbgBBgQgCBkBEBTQAoAwA7AXQBEAaBHgVQABATANA0QALAxACAbQAEBbg9AeQgeAOgigDQgpgDgHgdQAjAEAVgWQARgUAAgeQAAgegRgVQgTgXghAAQgwACgSAyQgSAxAZAoQAPAXAfASQAfARAeABQA4ABAngeQAngeAGgzQAGgtgOg7QgRhIgBgcQAzgbAbgfQAjgnAGg3QAIhWgzg6Qg2g+hXAKQgHgzgPhFQA+hGAag0QArhUgFhgQgDgwgVg8QgahOgbgFQgGgBgSAM").p("ABmoEQANAOABAUQAGA5guBIQgkA7grAbQgThLAUhQQAUhYA1gRQARgFAOAQ").p("AAGgMQgFADgJAEQgjAUgVAjQgZAqAEAxQACAaAPAbQAOAZATAQQAfAaAUgHQgBgIgIgGQgKgFgEgDQgTgOgEgGQgdgoAYgyQAXgxAugIQANBOAeCnQhjAXhJgyQhFgvgHhPQgGhJAmhCQAZgoA4g2QAtgsALgJQAIAjAMBJQgEAGgIAD").p("ACvC3QAAAngWAhQgUAfgiAQQgdiggOhQQAygCAjAnQAiAkAAAw").f();

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(-22.3,-63.7,44.9,127.5);


(lib.Interpolar32 = function() {
	this.initialize();

	// Camada 1
	this.instance = new lib.nota8();
	this.instance.setTransform(-337.8,26.9,1,1,0,0,0,15.3,27.6);
	this.instance.alpha = 0.5;
	this.instance.compositeOperation = "lighter";

	this.addChild(this.instance);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(-353.2,-0.7,30.6,55.2);


(lib.nota8 = function() {
	this.initialize();

	// Camada 1
	this.instance = new lib.Interpolar17("synched",0);
	this.instance.setTransform(15.3,27.6);

	this.addChild(this.instance);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(0,0,30.6,55.2);


(lib.Interpolar17 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#ffffff").p("AA3icQgcgdgqgTQgqgOgUgHQgigNgUgXQgDgHgCgDQgFgHgHAEIgEACICwGBQgagCgaAPQgYAPgRAYQgRAZgCAZQgCAbAQAUQAIAKAQADQAPADANgEQAkgKAZgnQAZgngHgeQgDgNgJgRQgKgTgFgKIhQiwQAYAGA6AEQA1AHAXAZQAlAnAABTQAJgGgBgPQAAgEgDgXQgEghgOgbQgOgdgVgPQgFgzglgm").p("ABUhNQgTgMgdgKQghgLgQgGQg7gXgbguQBIAGAiAPQA3AYAWA/").f();

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(-15.2,-27.5,30.6,55.2);


(lib.Interpolar33 = function() {
	this.initialize();

	// Camada 1
	this.instance = new lib.nota5();
	this.instance.setTransform(-79.2,48.6,1.556,1.556,15,0,0,13.8,28.5);
	this.instance.alpha = 0.5;
	this.instance.compositeOperation = "lighter";

	this.addChild(this.instance);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(-111.5,0.2,64.4,96.8);


(lib.nota5 = function() {
	this.initialize();

	// Camada 1
	this.instance = new lib.Interpolar19("synched",0);
	this.instance.setTransform(13.8,28.5);

	this.addChild(this.instance);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(0,0,27.6,57);


(lib.Interpolar19 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#ffffff").p("ABlhPQATAhAFAnQABAJADA2QAAACgBAFQAAAEADABQAFgCABgFQABgDAAgIQAFhcghg6QgZgvg9gbQghgOgQgHQgdgMgSgMQgNgKgMgQQgIgKgOgWQgCgDgBgBQgCgDgDAAIgJAEQgBABABADIC3GLQgbgEgdATQgSAKgPAYQgPAYgEAWQgFAdANAVQAJAOASAFQAQAEANgEQAMgDAMgIQAXgOARgdQAPgcAAgXQAAgOgGgRQgKgbgWgtQgZgygLgYIhFiUQAwgMArASQAuASAZAs").f();

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(-13.7,-28.4,27.6,57);


(lib.nota7 = function() {
	this.initialize();

	// Camada 1
	this.instance = new lib.Interpolar23("synched",0);
	this.instance.setTransform(9.4,15.1);

	this.addChild(this.instance);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(0,0,18.9,30.2);


(lib.Interpolar23 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#ffffff").p("AAYgFQgFAEgFAKQgGAJgDADIhVirQgBAAgIAEQgGACADAEICREjQAKggAJgTQAIgSAEgIQAGgQACgJQADgJAAgKQAAgLgDgIQgIgWgVgFQgVgFgSAQ").p("AAgAMQAUgHAKAbQAGAQgGAcQgBAFgJAiIgmhLQgBgWATgG").f();

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(-9.3,-15,18.9,30.2);


(lib.Interpolar29 = function() {
	this.initialize();

	// Camada 1
	this.instance = new lib.nota6();
	this.instance.setTransform(-488,-41,1,1,0,0,0,29,46.7);
	this.instance.alpha = 0.5;
	this.instance.compositeOperation = "lighter";

	this.addChild(this.instance);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(-517.1,-87.8,58.1,93.4);


(lib.nota6 = function() {
	this.initialize();

	// Camada 1
	this.instance = new lib.Interpolar25("synched",0);
	this.instance.setTransform(29,46.7);

	this.addChild(this.instance);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(0,0,58.1,93.4);


(lib.Interpolar25 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#ffffff").p("AAvnQQhcBCj0CqIDWH1Qg6gNgoA/QgmA/AaAzQAWAnArgLQAlgKAXghQAdgogDgmQgBgXgRgnQgWgwgKgXQg5iFgdhDQgzh4gbhFQAyghBrhMQBlhIA2gjIC7G2Qg8gMgmA+QgmA8AaA1QAJASAUAIQAUAJARgEQAqgJAYgrQAUglgDgnQgCgVgTgtQgXg1gLgZIi5mwIgDAC").f();

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(-28.9,-46.6,58.1,93.4);


(lib.notafinal17 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AgNglQgkAPALAiQALAkAhgGQAUgDAKgQQAIgPgEgRQgEgSgNgJQgPgJgVAI").f();
	this.shape.setTransform(52.1,-12.8);

	this.shape_1 = new Shape();
	this.shape_1.graphics.f("#000000").p("AA+lCQgxgNgwAKQgvAKgmAZQgkAYgWAgQgSAcgGAeQgIAmAOAiQAMAfAhANQAeALAhgIQAhgIARgXQAUgagMgiQgHgWgUgMQgUgLgWACQgIABgfAQQgUALgJgOQgIgLAIgXQAGgSAKgMQAXgfAugRQBFgZAuApQAnAiATBJQAUBIgOBRQgLBDgeA9QgXAtgpA1QgZAegyA6IgLAMQgGAKAGAHQAHADAJgHQAKgKADgEQBnhdAwg5QBKhYAchYQAXhIgJhGQgKhSg1gtQgfgbgugM").f();
	this.shape_1.setTransform(23.3,0.5);

	this.shape_2 = new Shape();
	this.shape_2.graphics.f("#000000").p("AAqgMQgHgVgTgGQgRgGgTALQgkAVAVAlQAQAeAkgPQAlgPgMgk").f();
	this.shape_2.setTransform(47.6,-29.2);

	this.shape_3 = new Shape();
	this.shape_3.graphics.f("#000000").p("AgNglQgkAPALAiQALAkAhgGQAUgDAKgQQAIgPgEgRQgEgSgNgJQgPgJgVAI").f();
	this.shape_3.setTransform(52.1,-12.8);

	this.shape_4 = new Shape();
	this.shape_4.graphics.f("#000000").p("AAikQQAnAhAUBJQASBIgNBSQgLBCgfA9QgWAtgpA1QgZAegyA7IgLAMQgGAJAGAHQAHADAJgHQAKgKADgEQBnhdAvg5QBLhYAchYQAXhIgJhFQgKhTg1gsQgfgbgugNQgygMgvAJQgvAKgmAaQgkAXgWAhQgSAbgGAfQgIAlAOAiQAMAgAhAMQAeALAhgIQAhgIARgXQATgagLghQgHgXgUgMQgUgLgWADQgIABgfAQQgUAKgJgOQgIgLAIgXQAGgRAKgMQAXggAugQQBEgZAvAp").f();
	this.shape_4.setTransform(23.3,0.5);

	this.shape_5 = new Shape();
	this.shape_5.graphics.f("#000000").p("AAqgMQgHgVgTgGQgRgGgTALQgkAVAVAlQAQAeAkgPQAlgPgMgk").f();
	this.shape_5.setTransform(47.6,-29.2);

	this.shape_6 = new Shape();
	this.shape_6.graphics.f("#000000").p("AgNglQgkAPALAiQALAkAhgGQAUgDAKgQQAIgPgEgRQgEgSgNgJQgPgJgVAI").f();
	this.shape_6.setTransform(52.1,-12.8);

	this.shape_7 = new Shape();
	this.shape_7.graphics.f("#000000").p("AAikQQAnAhAUBJQASBIgNBSQgLBCgfA9QgWAtgpA1QgZAegyA7IgLAMQgGAJAGAHQAHADAJgHQAKgKADgEQBnhdAvg5QBLhYAchYQAXhIgJhFQgKhTg1gsQgfgbgugNQgygMgvAJQgvAKgmAaQgkAXgWAhQgSAbgGAfQgIAlAOAiQAMAgAhAMQAeALAhgIQAhgIARgXQATgagLghQgHgXgUgMQgUgLgWADQgIABgfAQQgUAKgJgOQgIgLAIgXQAGgRAKgMQAXggAugQQBEgZAvAp").f();
	this.shape_7.setTransform(23.3,0.5);

	this.shape_8 = new Shape();
	this.shape_8.graphics.f("#000000").p("AAqgMQgHgVgTgGQgRgGgTALQgkAVAVAlQAQAeAkgPQAlgPgMgk").f();
	this.shape_8.setTransform(47.6,-29.2);

	this.addChild(this.shape_8,this.shape_7,this.shape_6,this.shape_5,this.shape_4,this.shape_3,this.shape_2,this.shape_1,this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(2.8,-33.5,53.5,67);


(lib.notafinal16 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AC9jFQgNAOgOAhQgIATgQAqQh0EUgWAvQgugKhjgQQhggQgvgKICbluQAZApA4gOQA1gOARguQAFgQgFgRQgGgQgLgIQgagSglALQghAKgVAZQgLAOgQAlQgJAVgSAtIiYFpIADABQBoARDRAmICwmkQAXAqA5gPQA4gPAPgtQAMgkgdgSQgagQgfAHQgmAHgUAY").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(-2.8,-28.6,64.8,57.4);


(lib.notafinal15 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AC9jFQgNAOgOAhQgIATgQAqQh0EUgWAvQgugKhjgQQhggQgvgKICbluQAZApA4gOQA1gOARguQAFgQgFgRQgGgQgLgIQgagSglALQghAKgVAZQgLAOgQAlQgJAVgSAtIiYFpIADABQBoARDRAmICwmkQAXAqA5gPQA4gPAPgtQAMgkgdgSQgagQgfAHQgmAHgUAY").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(-2.8,-28.6,64.8,57.4);


(lib.notafinal14 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AC9jFQgNAOgOAhQgIATgQAqQh0EUgWAvQgugKhjgQQhggQgvgKICbluQAZApA4gOQA1gOARguQAFgQgFgRQgGgQgLgIQgagSglALQghAKgVAZQgLAOgQAlQgJAVgSAtIiYFpIADABQBoARDRAmICwmkQAXAqA5gPQA4gPAPgtQAMgkgdgSQgagQgfAHQgmAHgUAY").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(-2.8,-28.6,64.8,57.4);


(lib.notafinal3 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AAzihQgBgGgIgFQgHgFgFgCQgcgHgbAYQgcAVAAAXQABAOAEAWQAGAmAAABQAAADAPBqQAJBCAHAqQABABAAADQAAADACABIAGgBQAAAAAAgCIgmkNQAUAKAZgKQAKgEALgKQAMgJAGgKQAOgUgHgS").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(24.2,-18.1,10.7,36.3);


(lib.notafinal12 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AhJjUIB7EzQgagFgaASQgLAIgJANQgLAPgEAMQgFAMABAMQAAAOAGAKQAFAIAJAEQAJAEAHAAQAiABAagkQAZghgHgbQgFgQgLgaQgSgqgBgCQhAipgihQQgBgDgBgCQgBgDgDAAIgHACQgBABABAD").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(22.1,-21.9,14.9,43.9);


(lib.notafinal22 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AhJjUIB7EzQgagFgaASQgLAIgJANQgLAPgEAMQgFAMABAMQAAAOAGAKQAFAIAJAEQAJAEAHAAQAiABAagkQAZghgHgbQgFgQgLgaQgSgqgBgCQhAipgihQQgBgDgBgCQgBgDgDAAIgHACQgBABABAD").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(22.1,-21.9,14.9,43.9);


(lib.notafinal2 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AhXkFQgBACABACICUF1QgfgHggAXQgMAJgMAQQgNARgFAQQgFAOABAOQAAASAHAMQAFAJANAFQAKAEAJAAQAoACAggrQAegpgJggQgGgTgNggQgWgygBgEQhOjMgphgQgBgEgBgDQgCgDgDgBIgIAD").f();
	this.shape.setTransform(29.5,0,0.826,0.826);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(22.1,-21.9,14.9,43.9);


(lib.notafinal9 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AhJjUIB7EzQgagFgaASQgLAIgJANQgLAPgEAMQgFAMABAMQAAAOAGAKQAFAIAJAEQAJAEAHAAQAiABAagkQAZghgHgbQgFgQgLgaQgSgqgBgCQhAipgihQQgBgDgBgCQgBgDgDAAIgHACQgBABABAD").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(22.1,-21.9,14.9,43.9);


(lib.notafinal4 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AgYjNIAWBoIgiARIgWhkIgQAEIAXBnQgLAHgNAFIAMA2QAEgBAIgFQAHgEAFgBIARBLQgNAHgMAFIAMA3QAGgBAHgEQAIgEAEgCIAVBkIAPgDIgWhpQAJgEAagNIAVBgIAPgEIgWhkQANgFALgHIgMg2IgYAMIgRhNIAZgMIgMg1IgYAMIgVhkIgQAD").p("AAHgvIACgBIARBMIgiASIgRhMQAWgKAKgH").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(21.9,-20.9,15.4,41.8);


(lib.notafinal5 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AgYjNIAWBoIgiARIgWhkIgQAEIAXBnQgLAHgNAFIAMA2QAEgBAIgFQAHgEAFgBIARBLQgNAHgMAFIAMA3QAGgBAHgEQAIgEAEgCIAVBkIAPgDIgWhpQAJgEAagNIAVBgIAPgEIgWhkQANgFALgHIgMg2IgYAMIgRhNIAZgMIgMg1IgYAMIgVhkIgQAD").p("AAHgvIACgBIARBMIgiASIgRhMQAWgKAKgH").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(21.9,-20.9,15.4,41.8);


(lib.notafinal23 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("ABDp8QgHgCgRANQgOAKgHAIQgtA3gNBvQgNBtAbBVQgkAphbBdQhJBbgCBgQgCBkBEBTQApAwA6AXQBFAaBGgVQABATAOA0QAKAxACAbQAEBbg8AeQgeAOgjgDQgpgDgHgdQAjAEAVgWQASgUAAgeQAAgegSgVQgTgXggAAQgxACgSAyQgRAxAZAoQAOAXAgASQAfARAeABQA3ABAngeQAogeAFgzQAGgtgOg7QgRhIgBgcQAzgbAcgfQAjgnAFg3QAJhWgzg6Qg3g+hXAKQgHgygOhGQA9hFAag1QAshUgGhfQgCgwgWg9QgahNgagF").p("ABloEQAOAPAAATQAGA6gtBHQgkA7gsAcQgShLAThRQAUhXA2gSQARgFANAQ").p("AAFgLQgEACgKAEQgiAUgVAjQgaAqAFAxQACAaAOAbQAOAZAUAQQAfAaAUgHQgBgIgJgGQgKgFgDgDQgUgOgEgGQgdgoAZgyQAXgxAtgIQANBOAfCnQhjAXhKgyQhFgvgGhPQgHhJAnhCQAYgoA4g2QAtgrAMgJQAHAiAMBKQgEAFgIAE").p("ACvC3QAAAngWAhQgVAfghAQQgdiggPhQQAygCAkAnQAiAkAAAw").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(7.1,-63.7,44.9,127.5);


(lib.notafinal1 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AAmoeQgMAJgGAHQgoAwgLBgQgLBfAYBKQgfAjhPBRQhABPgBBSQgCBXA7BIQAjAqAzATQA7AXA9gSQABAQAMAuQAJAqABAXQAFBPg2AaQgaAMgdgCQgkgDgGgZQAfADASgTQAOgRAAgaQAAgagOgSQgRgUgcAAQgqABgPAsQgQAqAWAjQANAUAbAPQAbAPAaABQAvABAigaQAigaAFgsQAFgngMgzQgOg/gBgYQAsgXAYgbQAegiAFgvQAIhLgtgzQgvg1hMAJQgGgsgMg8QA1g8AXguQAlhJgFhSQgBgqgTg0QgXhEgXgEQgFgBgPAK").p("AgCltQARhMAvgPQAOgEAMANQAMANABARQAEAygnA+QgfAzglAYQgQhBAQhG").p("AgBhvQAGAeAKBAQgCAFgIADQgEACgIADQgeASgSAdQgWAlAEAqQACAXAMAXQAMAWARAOQAbAXARgGQgBgIgHgFQgIgEgDgDQgRgMgEgFQgZgjAVgrQAUgqAngHQALBDAbCRQhWAUg/gsQg8gogGhFQgFg/Ahg5QAVgiAxgvQAngmAKgI").p("ACYCfQAAAigTAcQgSAbgdAOQgZiLgNhFQAsgBAfAhQAdAfAAAq").f();
	this.shape.setTransform(29.5,0,1.154,1.154);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(7.1,-63.7,44.9,127.5);


(lib.notafinal20 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("ABsgkQAlAmAABTQAIgGAAgPQAAgEgEgXQgEghgNgaQgPgegVgOQgFgzgkgnQgcgdgqgTQgrgOgUgHQgigMgTgXQgDgHgDgEQgEgGgIADIgEACICwGBQgZgCgaAPQgYAPgRAYQgRAZgCAZQgDAbARAUQAIAKAQADQAOADAOgEQAjgKAagnQAZgngHgeQgDgNgKgRQgKgTgFgKIhPivQAXAFA7AEQA0AIAYAZ").p("AAkhjQghgLgQgGQg7gXgbgtQBIAFAhAPQA4AZAVA+QgSgLgdgL").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(14.2,-27.6,30.6,55.2);


(lib.notafinal18 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("ABsgkQAlAmAABTQAIgGAAgPQAAgEgEgXQgEghgNgaQgPgegVgOQgFgzgkgnQgcgdgqgTQgrgOgUgHQgigMgTgXQgDgHgDgEQgEgGgIADIgEACICwGBQgZgCgaAPQgYAPgRAYQgRAZgCAZQgDAbARAUQAIAKAQADQAOADAOgEQAjgKAagnQAZgngHgeQgDgNgKgRQgKgTgFgKIhPivQAXAFA7AEQA0AIAYAZ").p("AAkhjQghgLgQgGQg7gXgbgtQBIAFAhAPQA4AZAVA+QgSgLgdgL").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(14.2,-27.6,30.6,55.2);


(lib.notafinal8 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AiUkSIgEACICwGBQgagCgaAPQgYAPgRAYQgQAZgDAZQgCAbAQAUQAJAKAPADQAPADANgEQAkgKAZgnQAZgngHgeQgDgNgJgRQgKgTgFgKIhQiwQAYAGA6AEQA1AHAXAZQAlAnAABTQAJgGgBgPQAAgEgDgXQgFghgNgbQgOgdgWgPQgFgzgkgmQgcgdgqgTQgqgOgUgHQgigMgUgYQgDgHgCgDQgFgHgHAE").p("AgNh0Qg7gXgbguQBIAGAhAPQA4AYAWA/QgTgMgdgKQghgLgQgG").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(14.2,-27.6,30.6,55.2);


(lib.notafinal13 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AB8gGQABAIADA2QAAACAAAFQAAAEADABQAFgCABgFQAAgDAAgIQAFhcggg6Qgagug8gcQgigNgQgHQgdgNgRgMQgNgJgNgQQgIgLgOgVQgBgDgCgCQgCgDgCAAIgKAFQgBABACADIC3GKQgcgEgdATQgRAKgQAYQgOAYgEAWQgFAdAMAVQAJAOATAFQAQAEANgEQALgDANgIQAXgOAQgdQAPgcAAgXQAAgOgFgRQgLgbgWgtQgYgygMgYIhEiUQAwgLArARQAuATAYAsQATAhAFAn").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(15.8,-28.5,27.6,57);


(lib.notafinal11 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AB8gGQABAIADA2QAAACAAAFQAAAEADABQAFgCABgFQAAgDAAgIQAFhcggg6Qgagug8gcQgigNgQgHQgdgNgRgMQgNgJgNgQQgIgLgOgVQgBgDgCgCQgCgDgCAAIgKAFQgBABACADIC3GKQgcgEgdATQgRAKgQAYQgOAYgEAWQgFAdAMAVQAJAOATAFQAQAEANgEQALgDANgIQAXgOAQgdQAPgcAAgXQAAgOgFgRQgLgbgWgtQgYgygMgYIhEiUQAwgLArARQAuATAYAsQATAhAFAn").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(15.8,-28.5,27.6,57);


(lib.notafinal7 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("Ah6kZQgCgDgDAAIgJAEQgBABABADIC3GLQgcgEgcATQgSAKgPAYQgPAYgDAWQgFAdAMAVQAJAOATAFQAPAEANgEQALgDANgIQAXgOAQgdQAQgcAAgXQAAgOgGgRQgLgbgVgtQgZgzgLgXIhEiUQAvgMArASQAuASAZAsQATAhAFAnQABAJADA2QAAACgBAFQAAAEADABQAFgCABgFQABgDAAgIQAFhcghg6QgZgvg9gbQghgNgQgIQgdgMgSgMQgNgKgMgQQgIgKgOgWQgBgDgCgB").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(15.8,-28.5,27.6,57);


(lib.notafinal10 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AAXgEQgEAEgGAJQgFAJgEADIhViqQAAAAgJADQgFADACAEICREiQALggAIgTQAIgSAEgIQAHgQABgJQADgJAAgKQAAgLgDgIQgIgVgVgFQgVgFgSAQ").p("AAgAMQATgHAKAbQAGAQgFAcQgBAFgKAiIgmhLQgBgWAUgG").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(20.1,-15,18.9,30.2);


(lib.notafinal19 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AAynRIgEABQhbBCj1CrIDXH0Qg7gNgnA/QgnA/AbAzQAVAnArgLQAmgKAXghQAcgogCgmQgCgXgRgnQgVgwgLgXQg5iFgdhDQgzh4gbhFQAyghBshMQBlhIA1giIC7G1Qg7gMgnA+QglA8AaA1QAJASAUAIQATAJASgEQApgJAYgrQAVglgDgnQgCgVgTgtQgYg1gKgYIi5mw").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(0.5,-46.6,58.1,93.4);


(lib.notafinal21 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AAynRIgEABQhbBCj1CrIDXH0Qg7gNgnA/QgnA/AbAzQAVAnArgLQAmgKAXghQAcgogCgmQgCgXgRgnQgVgwgLgXQg5iFgdhDQgzh4gbhFQAyghBshMQBlhIA1giIC7G1Qg7gMgnA+QglA8AaA1QAJASAUAIQATAJASgEQApgJAYgrQAVglgDgnQgCgVgTgtQgYg1gKgYIi5mw").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(0.5,-46.6,58.1,93.4);


(lib.notafinal6 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AkhjjIDWH0Qg6gNgoA/QgmA/AaAzQAWAnArgMQAlgKAXggQAdgogCgnQgCgWgRgnQgWgwgKgXQg5iFgdhDQgzh4gbhFQAyghBshMQBkhIA2gjIC6G2Qg7gMgmA+QgmA8AaA1QAJASAUAIQAUAJARgEQAqgJAYgrQAUglgDgnQgCgVgTgtQgYg1gKgZIi5mwIgEACQhbBCj0Cr").f();
	this.shape.setTransform(29.5,0);

	this.addChild(this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(0.5,-46.6,58.1,93.4);


(lib.Símbolo1 = function() {
	this.initialize();

	// Camada 1
	this.shape = new Shape();
	this.shape.graphics.f("#000000").p("AhPsyIAAZnICfAAIAA5nIifAA").f();
	this.shape.setTransform(-719.7,47.9,1.035,0.598);

	this.shape_1 = new Shape();
	this.shape_1.graphics.f("#000000").p("AhPsyIAAZnICfAAIAA5nIifAA").f();
	this.shape_1.setTransform(994.7,47.9,1.035,0.598);

	this.shape_2 = new Shape();
	this.shape_2.graphics.f("#000000").p("ECb/gAIMk38AAAIAAATME38AAAIAAgT").f();
	this.shape_2.setTransform(191.4,25.2,1.003,1.195);

	this.shape_3 = new Shape();
	this.shape_3.graphics.f("#000000").p("ECb/gAIMk38AAAIAAATME38AAAIAAgT").f();
	this.shape_3.setTransform(191.4,1.3,1.003,1.195);

	this.shape_4 = new Shape();
	this.shape_4.graphics.f("#000000").p("ECb/gAJMk38AAAIAAATME38AAAIAAgT").f();
	this.shape_4.setTransform(191.4,49.1,1.003,1.195);

	this.shape_5 = new Shape();
	this.shape_5.graphics.f("#000000").p("ECb/gAJMk38AAAIAAATME38AAAIAAgT").f();
	this.shape_5.setTransform(191.4,96.9,1.003,1.195);

	this.shape_6 = new Shape();
	this.shape_6.graphics.f("#000000").p("ECb/gAJMk38AAAIAAATME38AAAIAAgT").f();
	this.shape_6.setTransform(191.4,73,1.003,1.195);

	this.addChild(this.shape_6,this.shape_5,this.shape_4,this.shape_3,this.shape_2,this.shape_1,this.shape);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(-810.1,-1.1,2003.2,99.2);


(lib.Interpolar27 = function() {
	this.initialize();

	// Camada 1
	this.instance = new lib.cópia4();
	this.instance.setTransform(-959.9,-119.4);

	this.shape = new Shape();
	this.shape.graphics.f("#0066cc").p("EAzmgANMhnJAAAIAAAdMBnJAAAIAAgd").f();
	this.shape.setTransform(-401.8,67.1);

	this.instance_1 = new lib.cópia2();
	this.instance_1.setTransform(-959.9,-119.4);

	this.shape_1 = new Shape();
	this.shape_1.graphics.f("#0066cc").p("EAzmgANMhnJAAAIAAAdMBnJAAAIAAgd").f();
	this.shape_1.setTransform(-401.8,67.1);

	this.instance_2 = new lib.topobackground();
	this.instance_2.setTransform(-959.9,-119.4);

	this.shape_2 = new Shape();
	this.shape_2.graphics.f("#0066cc").p("EAzmgANMhnJAAAIAAAdMBnJAAAIAAgd").f();
	this.shape_2.setTransform(-401.8,67.1);

	this.addChild(this.shape_2,this.instance_2,this.shape_1,this.instance_1,this.shape,this.instance);
}).prototype = p = new Container();
p.nominalBounds = new Rectangle(-959.9,-119.4,1920,239);


(lib.cópia4 = function() {
	this.initialize(images.cópia4);
}).prototype = new Bitmap();
p.nominalBounds = new Rectangle(0,0,1920,239);


(lib.cópia2 = function() {
	this.initialize(images.cópia2);
}).prototype = new Bitmap();
p.nominalBounds = new Rectangle(0,0,1920,239);


(lib.topobackground = function() {
	this.initialize(images.topobackground);
}).prototype = new Bitmap();
p.nominalBounds = new Rectangle(0,0,1920,239);