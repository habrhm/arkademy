function data() {
	var obj_data = {
  		name : "Muhammad Haris Abdurrahman",
      	age : 18,
      	address : "Dsn. Ciherang Rt.01 Rw.03 Ds.Ciherang Kec. Sumedang Selatan Kab. Sumedang Prov. Jawa Barat",
      	hobbies : "Gaming, Coding, Reading",
      	is_married : false,
      	list_school :{
    		sd : {
        		name : "SDN Karangmulya",
              	year_in : 2007,
              	year_out : 2013,
              	major : null
        	},
          	smp : {
        		name : "SMPN 1 Sumedang",
              	year_in : 2013,
              	year_out : 2016,
              	major : null
        	},
      		sma : {
        		name : "SMKN 1 Sumedang",
              	year_in : 2016,
              	year_out : 2019,
              	major : "RPL"
        	}
    	},
      	skill :{
        	a:{
            	name : "JAVA",
              	level :"Advance"
            },
          	b:{
            	name : "PHP",
              	level :"Beginner"
            },
      		c:{
            	name : "HTML & CSS",
              	level :"Beginner"
            },
    		d:{
            	name : "Javascript",
              	level :"Beginner"
            }
        
        },
      	interest_in_coding : true
	};
  
  	return JSON.stringify(obj_data);
}

console.log(JSON.parse(data()));