var simplemaps_countrymap_mapdata={
  main_settings: {
    //General settings
		width: "responsive", //or 'responsive'
    background_color: "#FFFFFF",
    background_transparent: "yes",
    border_color: "#ffffff",
    pop_ups: "detect",
    
		//State defaults
		state_description: "State description",
    state_color: "#88A4BC",
    state_hover_color: "#3B729F",
    state_url: "",
    border_size: 1.5,
    all_states_inactive: "no",
    all_states_zoomable: "yes",
    
		//Location defaults
		location_description: "Location description",
    location_url: "",
    location_color: "#FF0067",
    location_opacity: 0.8,
    location_hover_opacity: 1,
    location_size: 25,
    location_type: "square",
    location_image_source: "frog.png",
    location_border_color: "#FFFFFF",
    location_border: 2,
    location_hover_border: 2.5,
    all_locations_inactive: "no",
    all_locations_hidden: "no",
    
		//Label defaults
		label_color: "#ffffff",
    label_hover_color: "#ffffff",
    label_size: 16,
    label_font: "Arial",
    label_display: "auto",
    label_scale: "yes",
    hide_labels: "no",
    hide_eastern_labels: "no",
   
		//Zoom settings
		zoom: "yes",
    manual_zoom: "yes",
    back_image: "no",
    initial_back: "no",
    initial_zoom: "-1",
    initial_zoom_solo: "no",
    region_opacity: 1,
    region_hover_opacity: 0.6,
    zoom_out_incrementally: "yes",
    zoom_percentage: 0.99,
    zoom_time: 0.5,
    
		//Popup settings
		popup_color: "white",
    popup_opacity: 0.9,
    popup_shadow: 1,
    popup_corners: 5,
    popup_font: "12px/1.5 Verdana, Arial, Helvetica, sans-serif",
    popup_nocss: "no",
    
		//Advanced settings
		div: "map",
    auto_load: "yes",
    url_new_tab: "no",
    images_directory: "default",
    fade_time: 0.1,
    link_text: "View Website"
  },
  state_specific: {
    NPBA: {
      name: "Bagmati",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "default"
    },
    NPBH: {
      name: "Bheri",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "default"
    },
    NPDH: {
      name: "Dhawalagiri",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "default"
    },
    NPGA: {
      name: "Gandaki",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "default"
    },
    NPJA: {
      name: "Janakpur",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "default"
    },
    NPKA: {
      name: "Karnali",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "default"
    },
    NPKO: {
      name: "Bhojpur",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "default"
    },
    NPLU: {
      name: "Lumbini",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "default"
    },
    NPMA: {
      name: "Mahakali",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "default"
    },
    NPME: {
      name: "Mechi",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "default"
    },
    NPNA: {
      name: "Narayani",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "default"
    },
    NPRA: {
      name: "Rapti",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "default"
    },
    NPSA: {
      name: "Sagarmatha",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "default"
    },
    NPSE: {
      name: "Seti",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "default"
    }
  },
  locations: {
    "0": {
      name: "Kathmandu",
      lat: "27.716667",
      lng: "85.316667"
    }
  },
  labels: {
    NPBA: {
      name: "Bagmati",
      parent_id: "NPBA"
    },
    NPBH: {
      name: "Bheri",
      parent_id: "NPBH"
    },
    NPDH: {
      name: "Dhawalagiri",
      parent_id: "NPDH"
    },
    NPGA: {
      name: "Gandaki",
      parent_id: "NPGA"
    },
    NPJA: {
      name: "Janakpur",
      parent_id: "NPJA"
    },
    NPKA: {
      name: "Karnali",
      parent_id: "NPKA"
    },
    NPKO: {
      name: "Bhojpur",
      parent_id: "NPKO"
    },
    NPLU: {
      name: "Lumbini",
      parent_id: "NPLU"
    },
    NPMA: {
      name: "Mahakali",
      parent_id: "NPMA"
    },
    NPME: {
      name: "Mechi",
      parent_id: "NPME"
    },
    NPNA: {
      name: "Narayani",
      parent_id: "NPNA"
    },
    NPRA: {
      name: "Rapti",
      parent_id: "NPRA"
    },
    NPSA: {
      name: "Sagarmatha",
      parent_id: "NPSA"
    },
    NPSE: {
      name: "Seti",
      parent_id: "NPSE"
    }
  }
};