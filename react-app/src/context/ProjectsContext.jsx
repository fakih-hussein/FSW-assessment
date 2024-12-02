import React, { createContext, useState, useEffect } from "react";
import apiRoutes from "./../utils/api.js";

export const ProjectsContext = createContext();

export const ProjectsProvider = ({ children }) => {
    const [projects, setProjects] = useState([]);
  
    useEffect(() => {
      const fetchProjects = async () => {
        try {
          const response = await fetch(apiRoutes.getProjects);
          if (!response.ok) throw new Error("Failed to fetch projects");
          const data = await response.json();
          setProjects(data); 
        } catch (err) {
            console.log("Error");
        } 
      };
  
      fetchProjects();
    }, []);
  
    return (
      <ProjectsContext.Provider value={{ projects }}>
        {children}
      </ProjectsContext.Provider>
    );
  };