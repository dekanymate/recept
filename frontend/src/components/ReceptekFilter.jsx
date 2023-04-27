import React, { useState, useEffect } from "react";
import axios from "axios";
import receptekApi from "../api/receptek-api";

const CategoryFilter = () => {
  const [categories, setCategories] = useState([]);
  const [filteredCategories, setFilteredCategories] = useState([]);

  useEffect(() => {
    const fetchCategories = async () => {
      const result = await receptekApi.getKategoriak();
      setCategories(result.data);
      setFilteredCategories(result.data);
    };

    fetchCategories();
  }, []);

  const handleSearch = (event) => {
    const searchTerm = event.target.value;

    const filtered = categories.filter((category) =>
      category.name.toLowerCase().includes(searchTerm.toLowerCase())
    );
    setFilteredCategories(filtered);
  };

  return (
    <div>
      <select onChange={handleSearch}>
        {filteredCategories.map((category) => (
          <option key={category.id} value={category.nev}>
            {category.name}
          </option>
        ))}
      </select>
    </div>
  );
};

export default CategoryFilter;
